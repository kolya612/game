<?php
namespace common\models;

use backend\modules\employees\models\SearchModel;
use backend\modules\employees\Module;
use wbp\dumper\Dumper;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use backend\modules\employees\models\UserPermissions;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $verification_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends WbpActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_INACTIVE = 9;
    const STATUS_ACTIVE = 10;
    const ACTION = '/admin/employees';

    public $password;
    public $password_confirm;
    public static $imageTypes = ['profileImage'];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['email'], 'email'],
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_DELETED]],
            [['password','username','first_name','last_name','phone'], 'string', 'max' => 50],
        ];
    }

    public function getName(){
        if($this->first_name || $this->last_name) return trim($this->first_name.' '.$this->last_name);
        return $this->username;
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

    public function getUserPermissions()
    {
        return $this->hasMany(UserPermissions::className(), ['user_id' => 'id']);
    }

    public function checkPermission($moduleName,$controllerName,$actionName)
    {
        $permission=$this->getUserPermissions()
            ->andWhere([
                'module'=>$moduleName,
                'controller'=>$controllerName,
                'action'=>$actionName,
            ])->one();

        if($permission) return true;

        return false;
    }

    public function beforeSave($insert)
    {
        $data = Yii::$app->request->post();
        if(!empty($data['User']['password'])){
            $this->generateAuthKey();
            $this->setPassword($data['User']['password']);
        }

        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
        $data = Yii::$app->request->post();
        if (isset($data['Employees']['employeesPermissions'])) {
            UserPermissions::deleteAll(['user_id' => $this->id, 'lock' => 0]);

            foreach ($data['Employees']['employeesPermissions'] as $permission) {
                if (!empty($permission['action'])) {

                    $module = $permission['module'];

                    if (isset(Yii::$app->modules[$module]->controllerNamespace) && Yii::$app->modules[$module]->controllerNamespace == 'backend\modules\employees\controllers') {
                        $currentClass= Yii::$app->modules[$module]->className();
                    } else {
                        $currentClass=Yii::$app->modules[$module]['class'];
                    }

                    $permissions = $currentClass::$module_actions;

                    foreach ($permissions[$permission['permission']] as $actions) {
                        $newModel = NEW UserPermissions();
                        $newModel->user_id = $this->id;
                        $newModel->module = $permission['module'];
                        $newModel->controller = $permission['controller'];
                        $newModel->action = $actions['action'];
                        $newModel->save();
                    }
                }
            }
        }

        return parent::afterSave($insert, $changedAttributes);
    }

    public function afterDelete()
    {
        UserPermissions::deleteAll(['user_id' => $this->id]);

        parent::afterDelete();
    }
}
