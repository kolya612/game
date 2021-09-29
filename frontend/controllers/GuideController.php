<?php
namespace frontend\controllers;

use backend\modules\meals\models\Meals;
use backend\modules\members\models\MemberPlans;
use backend\modules\pages\models\Pages;
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
use yii\web\NotFoundHttpException;

/**
 * Site controller
 */
class GuideController extends BaseController
{

    public $href;
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
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actionIndex($href)
    {
        $model = Pages::findOne(['href' => $href]);
        if ($model) {
            $view = $model->view?$model->view:'index';

            return $this->render($view,['model'=>$model]);
        }else{
            throw new NotFoundHttpException('Page Not Found.');
        }
    }


}
