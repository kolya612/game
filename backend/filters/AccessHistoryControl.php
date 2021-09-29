<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 29.05.2015
 * Time: 15:35
 */

namespace backend\filters;

use Symfony\Component\Finder\Exception\AccessDeniedException;
use wbp\dumper\Dumper;
use Yii;
use backend\models\UserLog;
use common\models\User;
use yii\filters\AccessControl;
use yii\web\HttpException;
use yii\web\NotAcceptableHttpException;

class AccessHistoryControl extends AccessControl{

    public $denyCallback;
    public $permittedActions=['error','forbidden','logout','login','get-ip','return-as-superadmin','cancel-transaction','3ds-verification','3ds-complete','attachment','attachment1','get-file','csv-sample','uploadFile','processed'];
    public $avaliableModulesForAll=['app-backend','moduleCreator','profile'];

    public function beforeAction($action){
        $user = $this->user;
        $result=parent::beforeAction($action);
        if($result){
            if(in_array(Yii::$app->controller->module->id,$this->avaliableModulesForAll)){
                $this->addToLog();
                return $result;
            }
            if(in_array($action->id,$this->permittedActions)){
                $this->addToLog();
                return $result;
            }

            $currentUser=User::findOne(\Yii::$app->user->id);

            if ($currentUser->super_admin) {
                $this->addToLog();
                return true;
            }

            $result=$currentUser->checkPermission(Yii::$app->controller->module->id,$action->controller->id,$action->id);
            if($result){
                $this->addToLog();
                return true;
            }

            $this->addToLog(UserLog::ACCESS_DENIED);

            throw new HttpException(403,'Access denied', 403);

            return false;
        }
        return $result;

    }

    public function addToLog($additionalOptions='',$item_id=''){
        if($additionalOptions!=UserLog::ACCESS_DENIED){
            if(!Yii::$app->request->isAjax) return;
            if(!Yii::$app->request->post('logOnly')) return;
        }
        if(Yii::$app->request->get('id') && !$item_id) $item_id=Yii::$app->request->get('id');
        $module=Yii::$app->controller->module->id;
        $action=Yii::$app->controller->action->id;
        $attributes=[
                'user_id'=>\Yii::$app->user->id,
                'module'=>$module,
                'action'=>$action,
                'ip'=>$_SERVER['REMOTE_ADDR'],
                'server'=>json_encode($_SERVER),
                'additional_options'=>''
        ];
        if($item_id) $attributes['item_id']=$item_id;

        if(is_array($attributes['item_id'])) $attributes['item_id']=implode('|',$attributes['item_id']);

        if(!$additionalOptions){
            $searchAttr=$attributes;
            unset($searchAttr['server']);
            $lastLog=UserLog::find()
                ->andWhere($searchAttr)
                ->andWhere(' updated_at > (NOW()-180) ')
                ->orderBy('id desc');
            $lastLog=$lastLog->one();
        }else{
            $attributes['additional_options']=$additionalOptions;
        }


        if($lastLog) $lastLog->save();
        else{
            $log=new UserLog();
            $log->setAttributes($attributes,false);
            $log->save();
        }
        if(Yii::$app->request->post('logOnly')){
            exit();
//            Yii::$app->end();
        }
    }

}