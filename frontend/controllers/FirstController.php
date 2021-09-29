<?php
namespace frontend\controllers;

use backend\modules\meals\models\Meals;
use backend\modules\members\models\MemberPlans;
use backend\modules\members\models\Members;
use backend\modules\workouts\models\Workouts;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use wbp\dumper\Dumper;
use Yii;
use yii\base\BaseObject;
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
class FirstController extends Controller
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
                        'actions' => ['workout','meal','step-back','workout-back'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionWorkout()
    {
        $this->layout='empty';

        $lastWorkout=Yii::$app
            ->user->identity
            ->getFreeWorkoutPlansSelectedLast30Days()
            ->one();

        if($lastWorkout) return $this->redirect(['site/index']);

        if($workout_id = Yii::$app->request->post('workout')){
            $newPlan=new MemberPlans([
                'is_free'=>1,
                'status'=>1,
                'plan_type'=>MemberPlans::WORKOUT_PLAN,
                'plan_id'=>$workout_id,
                'member_id'=>Yii::$app->user->identity->id,
            ]);
            $newPlan->save();
            return $this->redirect(['site/index']);
        }

        $recomendedPlans=Yii::$app->user->identity->getRecomendedWorkoutPlans();

        $otherPlans=Workouts::find()
            ->where([
                'status'=>Workouts::STATUS_ACTIVE,
                'gender'=>Yii::$app->user->identity->gender
            ])
            ->andWhere(['not in','id',
                (clone $recomendedPlans)->select('id')
            ])->all();

        $recomendedPlans=$recomendedPlans->all();

        return $this->render('workout',['recomendedPlans'=>$recomendedPlans,'otherPlans'=>$otherPlans]);
    }

    public function actionMeal()
    {
        $this->layout='empty';

        $lastWorkout=Yii::$app
            ->user->identity
            ->getFreeMealPlansSelectedLast30Days()
            ->one();

        if($lastWorkout) return $this->redirect(['site/index']);

        if($meal_id = Yii::$app->request->post('meal')){
            $newPlan=new MemberPlans([
                'is_free'=>1,
                'status'=>1,
                'plan_type'=>MemberPlans::MEAL_PLAN,
                'plan_id'=>$meal_id,
                'member_id'=>Yii::$app->user->identity->id,
            ]);
            $newPlan->save();
            return $this->redirect(['site/index']);
        }

        $recomendedPlans=Yii::$app->user->identity->getRecomendedMealPlans();

        $otherPlans=Meals::find()
            ->where([
                'status'=>Workouts::STATUS_ACTIVE,
                'gender'=>Yii::$app->user->identity->gender
            ])
            ->andWhere(['not in','id',
                (clone $recomendedPlans)->select('id')
            ])->all();

        $recomendedPlans=$recomendedPlans->all();

        return $this->render('meal',['recomendedPlans'=>$recomendedPlans,'otherPlans'=>$otherPlans]);
    }

    public function actionStepBack()
    {
        $member = Members::findOne(['id' => Yii::$app->user->id]);
        $member->register_step = 3;
        $member->save();

        return $this->redirect(['auth/continue-registration','step'=>3]);
    }

    public function actionWorkoutBack()
    {
        $memberPlans = MemberPlans::findOne(['member_id' => Yii::$app->user->id]);
        $memberPlans->delete();

        return $this->redirect(['first/workout']);
    }
}
