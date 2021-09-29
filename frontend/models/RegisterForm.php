<?php
namespace frontend\models;

use backend\modules\members\models\Members;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class RegisterForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $invitation_code;
    public $agree;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            ['username', 'trim'],
//            ['username', 'required'],
//            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
//            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['agree', 'required',  'requiredValue' => 1, 'message'=>'Please read and accept the terms and conditions'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => Members::className(), 'message' => 'This email address has already been taken.'],

            ['invitation_code', 'safe'],
            ['password', 'required'],
            ['password', 'string', 'min' => 8],
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool whether the creating new account was successful and email was sent
     */
    public function register()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Members();
        $user->status = Members::STATUS_ACTIVE;
        $user->register_step = 1;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
//        $user->generateEmailVerificationToken();
        $save = $user->save();// && $this->sendEmail($user);

        Yii::$app->user->login($user, 31536000);
        return $save;
    }

    /**
     * Sends confirmation email to user
     * @param User $user user model to with email should be send
     * @return bool whether the email was sent
     */
    protected function sendEmail($user)
    {
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'emailVerify-html', 'text' => 'emailVerify-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Account registration at ' . Yii::$app->name)
            ->send();
    }

}
