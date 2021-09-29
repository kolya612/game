<?php

namespace frontend\controllers;

use backend\modules\members\models\MembersAuth;
use backend\modules\members\models\Members;
use frontend\models\LoginForm;
use frontend\models\RegisterForm;
use frontend\models\RepassForm;
use frontend\models\ResetPasswordForm;
use wbp\dumper\Dumper;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;
use yii\widgets\ActiveForm;

class AuthController extends Controller
{
    public function beforeAction($action)
    {
        if ($action->id == 'auth') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    public function actions()
    {
        return ArrayHelper::merge(parent::actions(), [
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'onAuthSuccess'],
            ],
        ]);
    }

    public function onAuthSuccess($client)
    {
        $attributes = $client->getUserAttributes();

        /* @var $auth MembersAuth */
        $auth = MembersAuth::find()->where([
            'source' => $client->getId(),
            'source_id' => $attributes['id'],
        ])->one();

        if (Yii::$app->user->isGuest) {
            if ($auth) { // авторизация
                Yii::$app->user->login($auth->user, 31536000);
                return $this->redirect(['site/index']);
            } else {
//                Yii::$app->session->setFlash('error','Пользователь не привязан к данному аккаунту, вам необходимо зайти в личный кабинет с помощью логина и пароля, в настройках профиля привязать аккаунт к системе авторизации');
                $member=Members::find()->where(['email' => $attributes['email']])->one();
                if (isset($attributes['email']) && !$member) {

                    $member=new Members();
                    $member->email=$attributes['email'];
                    $member->setPassword(time().rand(1000,9999));
                    $member->register_step=1;
                    $member->status=Members::STATUS_ACTIVE;
                    $member->generateAuthKey();
                    $member->generatePasswordResetToken();

                    if ($member->save()) {
                        $auth = new MembersAuth([
                            'member_id' => $member->id,
                            'source' => $client->getId(),
                            'source_id' => (string)$attributes['id'],
                        ]);
                        if ($auth->save()) {
                            Yii::$app->user->login($member, 31536000);
                            return $this->redirect(['site/index']);
                        }else{
                            Yii::$app->getSession()->setFlash('error', [
                                "Something goes wrong. Try Again.",
                            ]);
                        }
                    }else{
                        Yii::$app->getSession()->setFlash('error', [
                            "Something goes wrong. Try Again.",
                        ]);
                    }
                }else{
                    Yii::$app->user->login($member, 31536000);
                    return $this->redirect(['site/index']);
                }
           }
        } else { // Пользователь уже зарегистрирован
            if (!$auth) { // добавляем внешний сервис аутентификации
                $auth = new MembersAuth([
                    'member_id' => Yii::$app->user->identity->id,
                    'source' => $client->getId(),
                    'source_id' => $attributes['id'],
                ]);
                $auth->save();
            }

            if (isset($attributes['email'])) {
                if(!Yii::$app->user->identity->email){
                    Yii::$app->user->identity->email=$attributes['email'];
                    Yii::$app->user->identity->save();
                }
            }

        }
    }

    public function actionLogin(){
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/index']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/index']);
        }

        $this->layout='empty';

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionRegister(){
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/index']);
        }

        $model = new RegisterForm();

        if(Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post())) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        } else {
            if ($model->load(Yii::$app->request->post()) && $model->register()) {
                Yii::$app->session->setFlash('success',Yii::t('login','Your account is created, it will reviewed asap, when it\'s was done you will receive email confirmation'));
                return $this->redirect(['site/index']);
            }
        }

        $this->layout='empty';

        return $this->render('register', [
            'model' => $model,
        ]);
    }

    public function actionContinueRegistration($step){
        $step=(int)$step;

        if($step>1 || !$step) return $this->redirect(['site/index']);

        if(Yii::$app->user->isGuest) return $this->redirect(['site/index']);

        $model=Yii::$app->user->identity;

        if($step>$model->register_step) return $this->redirect(['continue-registration','step'=>$model->register_step]);

        $model->scenario='continue'.$step;

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            if($step==1) {
                $model->life = $model::RACE_SETTING[$model->race]['life'];
                $model->magic = $model::RACE_SETTING[$model->race]['magic'];
                $model->agility = $model::RACE_SETTING[$model->race]['agility'];
                $model->strength = $model::RACE_SETTING[$model->race]['strength'];
                $model->intelligence = $model::RACE_SETTING[$model->race]['intelligence'];
            }
            $step++;
            if($step>1) $step=NULL;
            $model->register_step = $step;
            $model->save();
            if($step) return $this->redirect(['continue-registration','step'=>$step]);
            else return $this->redirect(['site/index']);
        }

        $this->layout='empty';
        return $this->render('register-step-'.$step,['model'=>$model]);
    }

    public function actionLogout(){
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionReturn(){
        if(!$_SESSION['old-__id']) throw new NotFoundHttpException(Yii::t('main','Page not found'));

        $_SESSION['__id']=$_SESSION['old-__id'];
        $_SESSION['old-__id']='';

        $this->redirect(['site/index']);
    }

    public function actionRepass()
    {
        $this->layout='empty';

        $model = new RepassForm();

        if(Yii::$app->request->isAjax) {
            if ($model->load(Yii::$app->request->post())) {
                Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        } else {
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                if ($model->sendEmail()) {
                    return $this->render('repass-message', ['message' => 'Please check your email. If your email is associated with a VIP account, an email will arrive with instructions to reset your password.']);
                } else {
                    return $this->render('repass-message', ['message' => 'Sorry, we are unable to reset password for email provided.']);
                }
            }
        }

        return $this->render('repass', [
            'model' => $model,
        ]);

    }

    public function actionResetPassword($token){
        $this->layout='empty';
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            return $this->render('repass-message', ['message' => 'New password was saved.']);
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionLoginAs($id){
        if(Yii::$app->adminUser->identity){
            $member=Members::findOne($id);
            if($member){
                Yii::$app->user->login($member,3600 * 24 * 30);
            }
        }
        return $this->redirect(['site/index']);
    }

}
