<?php

namespace backend\modules\meals\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\meals\models\Meals;
use backend\modules\meals\models\SearchModel;
use Yii;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=Meals::className();

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
