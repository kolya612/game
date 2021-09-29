<?php
namespace frontend\controllers;

use backend\modules\monsters\models\Monsters;
use frontend\models\Fight;
use frontend\models\Fighter;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use wbp\dumper\Dumper;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class BestiaryController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['signup','error','fight'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],

                    [
                        'actions' => ['index','error','fight'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actionError(){
        $this->layout='empty';
        $exception = Yii::$app->errorHandler->exception;
        return $this->render('error',[
            'name'=>$exception->statusCode,
            'message'=>$exception->getMessage(),
        ]);
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $monsters=Monsters::find()->all();

        return $this->render('index',['monsters'=>$monsters]);
    }

    public function actionFight()
    {
        $session = Yii::$app->session;

        if (Yii::$app->request->post()) {
            new Fight(Yii::$app->request->post(),$session['fighter'],$session['monster']);
        }

        if(isset($session['fighter'])){
            $fighter = $session['fighter'];
        } else {
            $fighter = new Fighter(Yii::$app->user->identity);
            $session['fighter'] = $fighter;
        }

        $monster_id = 1;
        if(isset($session['monster'])){
            $monster = $session['monster'];
        } else {
            $monster = Monsters::findOne(['id'=>$monster_id]);
            $session['monster'] = $monster;
        }

        return $this->render('fight',[
            'fighter' => $fighter,
            'monster' => $monster
        ]);
    }
}
