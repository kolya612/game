<?php
namespace frontend\models;

use backend\modules\members\models\Members;
use common\models\Config;
use Yii;
use yii\base\Model;
use common\models\User;

/**
 * Password reset request form
 */
class RepassForm extends Model
{
    public $email;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => Members::className(),
                'filter' => ['status' => Members::STATUS_ACTIVE],
                'message' => 'There is no user with this email address.'
            ],
        ];
    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return bool whether the email was send
     */
    public function sendEmail()
    {
        /* @var $user User */
        $user = Members::findOne([
            'status' => Members::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if (!$user) {
            return false;
        }
        
        if (!Members::isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
            if (!$user->save()) {
                return false;
            }
        }

        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => $user]
            )
            ->setFrom([Config::getParameter('email') => Config::getParameter('title')])
            ->setTo($this->email)
            ->setSubject('Password reset for ' . Config::getParameter('title'))
            ->send();
    }
}
