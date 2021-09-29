<?php
namespace backend\modules\preferences\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\accounts\models\SearchModel;
use common\models\ConfigPar;
use common\models\Identity;
use yii;

class DefaultController extends OneModelBaseController
{

    public function userActions(){
        return yii\helpers\ArrayHelper::merge(parent::userActions(),['profile']);
    }

    public function init()
    {
        $this->ModelName = Identity::className();
        return parent::init();
    }

    public function actionIndex()
    {
        $params=[
            'title'=>['label'=>'Title'],
            'phone'=>['label'=>'Phone'],
            'seo_title'=>['label'=>'СЕО Title'],
            'address'=>['label'=>'Address'],
            'seo_keywords'=>['label'=>'СЕО keywords'],
            'email'=>['label'=>'Email'],
            'seo_description'=>['label'=>'СЕО description'],
            'instagram'=>['label'=>'Instagram'],
            'footer_description'=>['label'=>'Footer description'],
            'twitter'=>['label'=>'Twitter'],
            'copyright'=>['label'=>'Copyright'],
            'facebook'=>['label'=>'Facebook'],
        ];
        $post=Yii::$app->request->post('ConfigPar', false);
        foreach ($params as $name=>$param){
            $params[$name]['model']=ConfigPar::findOne(['name'=>$name]);
            if(!$params[$name]['model']) unset($params[$name]);
            else{
                if($post){
                    $params[$name]['model']->value=$post[$name];
                    $params[$name]['model']->save();
                }
            }
        }

        return $this->render('index', ['params' => $params]);
    }


}
