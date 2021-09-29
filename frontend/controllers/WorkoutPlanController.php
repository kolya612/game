<?php
namespace frontend\controllers;

use backend\modules\meals\models\Meals;
use backend\modules\members\models\MemberPlans;
use backend\modules\workouts\models\Workouts;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\BaseObject;
use yii\base\InvalidArgumentException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class WorkoutPlanController extends Controller
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
                        'actions' => ['index','get-change-popup','switch','view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actionIndex()
    {
        $myPlans=Yii::$app->user->identity->getActiveWorkoutPlans();

        $otherPlans=Workouts::find()
            ->where(['status'=>Workouts::STATUS_ACTIVE,'gender'=>Yii::$app->user->identity->gender])
            ->andWhere(['not in', 'id', (clone $myPlans)->select('plan_id')]);

        $myPlans=$myPlans->all();
        $otherPlans=$otherPlans->all();

        return $this->render('index',[
            'otherPlans'=>$otherPlans,
            'myPlans'=>$myPlans
        ]);
    }

    public function actionSwitch($id){
        $lastFreeWorkout=Yii::$app
            ->user->identity
            ->getFreeWorkoutPlansSelectedLast30Days()
            ->one();

        $model=Workouts::find()->where(['id'=>$id,'status'=>Workouts::STATUS_ACTIVE])->one();
        if(!$model) return false;

        if($lastFreeWorkout){
            Yii::$app->session->setFlash('error','You can only change your plan one time monthly. Your program started on '.Yii::$app->formatter->asDate($lastFreeWorkout->created_at,'medium'));
            return $this->redirect(['index']);
        }

        $freePlans = MemberPlans::findAll([
            'plan_type'=>MemberPlans::WORKOUT_PLAN,
            'is_free'=>1,
            'status'=>1,
            'member_id'=>Yii::$app->user->identity->id
        ]);
        foreach ($freePlans as $plan){
            $plan->status=MemberPlans::STATUS_DISABLED;
            $plan->save();
        }
        $newPlan=new MemberPlans([
            'is_free'=>1,
            'status'=>1,
            'plan_type'=>MemberPlans::WORKOUT_PLAN,
            'plan_id'=>$model->id,
            'member_id'=>Yii::$app->user->identity->id,
        ]);
        $newPlan->save();

        Yii::$app->session->setFlash('success','Your workout plan has been changed.');

        return $this->redirect(['index']);
    }

    public function actionGetChangePopup($id){
        $model=Workouts::find()->where(['id'=>$id,'status'=>Workouts::STATUS_ACTIVE])->one();
        if(!$model) return false;

        $lastFreeWorkout=Yii::$app
            ->user->identity
            ->getFreeWorkoutPlansSelectedLast30Days()
            ->one();

        return $this->renderPartial('change-workout-popup',[
            'id'=>$id,
            'model'=>$model,
            'lastFreeWorkout'=>$lastFreeWorkout
        ]);
    }

    public function actionView($id){
        $model=Workouts::find()->where(['id'=>$id,'status'=>Workouts::STATUS_ACTIVE])->one();
        if(!$model) return false;

        if(!$model->checkCurrentMemberPermission()){
            throw new NotFoundHttpException();
        }

        $dataProvider=new ActiveDataProvider([
            'query'=>$model->getExercises()
        ]);

        return $this->render('view',['model'=>$model,'dataProvider'=>$dataProvider]);
    }


}
