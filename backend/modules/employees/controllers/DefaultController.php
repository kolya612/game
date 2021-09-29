<?php

namespace backend\modules\employees\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\employees\models\SearchModel;
use common\models\User;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=User::className();

        return parent::init();
    }

    public function actionIndex(){
        $modelName=$this->ModelName;
        $searchModel=new SearchModel();
        $params=\Yii::$app->request->get();
        $dataProvider=$searchModel->search($modelName,$params);

        return $this->render('index',['dataProvider'=>$dataProvider,'searchModel'=>$searchModel]);
    }

}
