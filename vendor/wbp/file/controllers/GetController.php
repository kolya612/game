<?php
/**
 * Created by PhpStorm.
 * User: costa
 * Date: 25.06.14
 * Time: 15:35
 */

namespace wbp\file\controllers;

use backend\modules\exercises\models\Exercises;
use backend\modules\meals\models\Meals;
use backend\modules\members\models\MemberPlans;
use backend\modules\members\models\Members;
use backend\modules\progress\models\Progress;
use backend\modules\supplements\models\Supplements;
use backend\modules\workouts\models\Workouts;
use common\models\User;
use wbp\file\models\File;
use wbp\file\ModuleTrait;
use yii\web\Controller;
use yii;

class GetController extends Controller
{
    use ModuleTrait;
    public function actionIndex()
    {
        echo "Hello, man. It's ok, dont worry.";
    }


    public function checkPermission($file){
        if(!Yii::$app->user->isGuest && get_class(Yii::$app->user->identity)==User::className()) return true;

        if(in_array($file->type,Meals::$fileTypes)){
            $plan=MemberPlans::findOne([
                'plan_type'=>MemberPlans::MEAL_PLAN,
                'plan_id'=>$file->item_id,
                'member_id'=>Yii::$app->user->identity->id,
                'status'=>MemberPlans::STATUS_ACTIVE
            ]);
            if($plan)
                return true;
        }

        if(in_array($file->type,Workouts::$fileTypes)){
            $plan=MemberPlans::findOne([
                'plan_type'=>MemberPlans::WORKOUT_PLAN,
                'plan_id'=>$file->item_id,
                'member_id'=>Yii::$app->user->identity->id,
                'status'=>MemberPlans::STATUS_ACTIVE
            ]);
            if($plan)
                return true;
        }

        return false;
    }


    /**
     *
     * All we need is love. No.
     * We need item (by id or another property) and alias (or images number)
     * @param $item
     * @param $size
     *
     */
    public function actionFileByItem($item='',$name='')
    {
        $file= $this->getModule()->getFile($item);

        if($file && $this->checkPermission($file)){
            $quoted = sprintf('"%s"', addcslashes(basename($file->name), '"\\'));
            $size   = filesize($file->getPathToOrigin());

            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $quoted);
            header('Content-Transfer-Encoding: binary');
            header('Connection: Keep-Alive');
            header('Expires: 0');
            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
            header('Pragma: public');
            header('Content-Length: ' . $size);
            readfile($file->getPathToOrigin());
//            header('Content-Type: image/jpg');
//            echo $file->getContent();
        }else{
            throw new \yii\web\HttpException(404, 'There is no file');
        }

    }
}