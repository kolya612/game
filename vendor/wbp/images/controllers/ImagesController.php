<?php
/**
 * Created by PhpStorm.
 * User: costa
 * Date: 25.06.14
 * Time: 15:35
 */

namespace wbp\images\controllers;

use app\models\Akts;
use app\models\Identity;
use backend\modules\exercises\models\Exercises;
use backend\modules\meals\models\Meals;
use backend\modules\members\models\Members;
use backend\modules\progress\models\Progress;
use backend\modules\supplements\models\Supplements;
use backend\modules\workouts\models\Workouts;
use common\models\User;
use yii\web\Controller;
use yii;
use wbp\images\models\Image;
use \wbp\images\ModuleTrait;

class ImagesController extends Controller
{
    use ModuleTrait;

    public function checkPermission($image){
        if(!Yii::$app->user->isGuest && get_class(Yii::$app->user->identity)==User::className()) return true;
        
        if($image->type==Members::$imageTypes[0] && !Yii::$app->user->isGuest && Yii::$app->user->identity->id==$image->item_id){
            return true;
        }
        if($image->type==Members::$imageTypes[0] && !$image->item_id && $image->unique_id==Yii::$app->request->get('unique_id')){
            return true;
        }

        if(in_array($image->type,Progress::$imageTypes) && !$image->item_id && $image->unique_id==Yii::$app->request->get('unique_id')){
            return true;
        }

        if(in_array($image->type,Progress::$imageTypes)){
            $progress=Progress::findOne(['id'=>$image->item_id]);
            if($progress && $progress->member_id==Yii::$app->user->identity->id)
                return true;
        }

        if(in_array($image->type,Workouts::$imageTypes) && !Yii::$app->user->isGuest){
            return true;
        }        
        
        if(in_array($image->type,Meals::$imageTypes) && !Yii::$app->user->isGuest){
            return true;
        }        
        
        if(in_array($image->type,Exercises::$imageTypes) && !Yii::$app->user->isGuest){
            return true;
        }        
        if(in_array($image->type,Supplements::$imageTypes) && !Yii::$app->user->isGuest){
            return true;
        }
        
        
//        if($image->type==Identity::$imageTypes[0] && (Yii::$app->user->isGuest || Yii::$app->user->identity->id==$image->item_id)){
//            return false;
//        }

        return false;
    }


    public function actionIndex()
    {
        echo "Hello, man. It's ok, dont worry.";
    }

    /**
     *
     * All we need is love. No.
     * We need item (by id or another property) and alias (or images number)
     * @param $item
     * @param $size
     *
     */
    public function actionImageByItem($item='',$size='', $method=1)
    {
//        echo $item; exit();
//        $dotParts = explode('.', $dirtyAlias);
//        if(!isset($dotParts[1])){
//            throw new \yii\web\HttpException(404, 'Image must have extension');
//        }
//        $dirtyAlias = $dotParts[0];

        $size = isset($size) ? $size : false;
        $image = $this->getModule()->getImage($item, $size);

//        if($image->getExtension() != $dotParts[1]){
//            throw new \yii\web\HttpException(404, 'Image not found (extenstion)');
//        }

        if($image && $this->checkPermission($image)){
            session_write_close();
            header('Content-Type: image/'.$image->ext);
            header("Cache-Control: max-age=86400");
            header("Pragma: cache");
            header("Expires: ". date(DATE_RFC2822, time() + 86400));
            echo $image->sendContent($size, $method);
            exit();
//            echo $image->getContent($size);
        }else{
            throw new \yii\web\HttpException(404, 'There is no images');
        }
        
        Yii::$app->end();

    }
}