<?php
namespace frontend\controllers;

use backend\modules\excategories\models\Excategories;
use backend\modules\exercises\models\Exercises;
use backend\modules\members\models\MembersViewHistory;
use frontend\models\ExercisesSearchModel;
use yii\base\BaseObject;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\web\NotFoundHttpException;

class ExerciseController extends BaseController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','view'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $categories = Excategories::find()->all();
        $get=\Yii::$app->request->get();
        $searchModel=new ExercisesSearchModel();
        $loaded = $searchModel->load($get);

        if(!$loaded){
            $recentlyDataProvider=new ActiveDataProvider([
                'query'=>\Yii::$app->user->identity->getExercisesViewHistory()
            ]);

            $exercises=Exercises::find()->where(['status'=>Exercises::STATUS_ACTIVE]);
            $dataProvider=new ActiveDataProvider([
                'query'=>$exercises
            ]);
        }else{
            $dataProvider = $searchModel->search();
        }

        return $this->render('index', [
            'loaded'=>$loaded,
            'categories'=>$categories,
            'recentlyDataProvider'=>$recentlyDataProvider,
            'dataProvider'=>$dataProvider,
            'searchModel'=>$searchModel
        ]);
    }

    public function actionView($id){
        $exercises=Exercises::findOne(['id'=>$id,'status'=>Exercises::STATUS_ACTIVE]);

        if(!$exercises) throw new NotFoundHttpException();

        MembersViewHistory::addHistory($id);

        $recentlyWatched=new ActiveDataProvider([
            'query'=>\Yii::$app->user->identity->getExercisesViewHistory()->andWhere(['!=','id',$id])
        ]);

        return $this->render('view', ['model'=>$exercises,'recentlyWatched'=>$recentlyWatched]);
    }
}
