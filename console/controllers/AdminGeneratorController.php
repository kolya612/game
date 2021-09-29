<?php

namespace console\controllers;
use common\models\User;

/**
 * Console commands for generation Super Admin Role
 */
class AdminGeneratorController extends \yii\console\Controller
{
    /**
     * Create super admin user role
     * @return bool
     */
    public function actionCreateSuperAdmin(){
        $user = new User();
        $user->email = 'admin@limilessxdev.com';
        $user->created_at = (new \DateTime())->format('Y-m-d H:i:s');
        $user->username = 'test';
        $user->setPassword('testtesttest');
        $user->generateAuthKey();

        return $user->save();
    }
}
