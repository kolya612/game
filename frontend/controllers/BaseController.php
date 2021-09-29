<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
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
class BaseController extends Controller
{
    public function beforeAction($action)
    {
        $before = parent::beforeAction($action);
        if($before){
            if(Yii::$app->user->identity){
                if(Yii::$app->user->identity->register_step){
                    return $this->redirect(['auth/continue-registration','step'=>Yii::$app->user->identity->register_step]);
                }
            }
        }
        return $before;
    }

}
