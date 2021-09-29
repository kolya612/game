<?php

namespace backend\modules\members\models;

use backend\modules\exercises\models\Exercises;
use backend\modules\meals\models\Meals;
use backend\modules\progress\models\Progress;
use backend\modules\supplements\models\Supplements;
use backend\modules\workouts\models\Workouts;
use common\models\Data;
use wbp\dumper\Dumper;
use wbp\images\models\Image;
use Yii;
use common\models\WbpActiveRecord;
use yii\base\NotSupportedException;
use yii\web\IdentityInterface;

class Members  extends WbpActiveRecord implements IdentityInterface
{
    public static $imageTypes = ['member_logo'];
    public $password;

    public $new_password;

    const ACTION = '/admin/members';
    const TITLE = 'Member';
    const RACE = [1 => 'Human', 2 => 'Alf', 3 => 'Gnome'];
    const RACE_SETTING = [1 => [
        'title' => 'Human',
        'life' => 100,
        'magic' => 50,
        'agility' => 4,
        'strength' => 7,
        'intelligence' => 4,
    ], 2 => [
        'title' => 'Alf',
        'life' => 80,
        'magic' => 70,
        'agility' => 8,
        'strength' => 2,
        'intelligence' => 5,
    ], 3 => [
        'title' => 'Gnome',
        'life' => 120,
        'magic' => 30,
        'agility' => 3,
        'strength' => 9,
        'intelligence' => 3,
    ]];
    const LVL = [
        1 => 100,
        2 => 200,
        3 => 400,
        4 => 800,
        5 => 1600,
        6 => 3200,
        7 => 6400,
        8 => 12800,
        9 => 25000,
        10 => 50000
    ];

    const SCENARIO_REGISTER_1='continue1';
    const SCENARIO_EDIT_PROFILE='edit';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%members}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO, self::SCENARIO_EDIT_PROFILE]],
            [['email'], 'email'],
            [['new_password','invitation_code','first_name','last_name','nick_name'], 'string', 'max' => 50],
            [['race','life','magic','status'], 'integer'],
            [['first_name'], 'required','on' => [self::SCENARIO_REGISTER_1, self::SCENARIO_EDIT_PROFILE]],

        ];
    }

    public function beforeSave($insert)
    {
        if($this->new_password){
            $this->setPassword($this->new_password);
        }
        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
        return parent::afterSave($insert, $changedAttributes);
    }

    public function getNick(){
        return $this->nick_name;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
        ];
    }

    public function getIdFnameLname()
    {
        return '(' . $this->id.'): '.$this->first_name.' '.$this->last_name;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }

    public static function findByEmailWithoutStatus($email)
    {
        return static::findOne(['email' => $email]);
    }

    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds user by verification email token
     *
     * @param string $token verify email token
     * @return static|null
     */
    public static function findByVerificationToken($token) {
        return static::findOne([
            'verification_token' => $token,
            'status' => self::STATUS_INACTIVE
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);

    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    public function getPassword(){
        return false;
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Generates new token for email verification
     */
    public function generateEmailVerificationToken()
    {
        $this->verification_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }
}