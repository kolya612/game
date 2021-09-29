<?php


namespace frontend\models;


use backend\modules\exercises\models\Exercises;
use backend\modules\exercisesCategories\models\ExercisesCategories;
use yii\base\BaseObject;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class ExercisesSearchModel extends Model
{
    public $categories=[];
    public $search;

    public function rules()
    {
        return [
            [['categories','search'],'safe']
        ];
    }

    public function search(){
        $query=Exercises::find();

        if($this->search) $query->andWhere(['like','title',$this->search]);
        if($this->categories){
            $query=$query->leftJoin("{{%exercises_excategories}}","{{%exercises_excategories}}.exercise_id={{%exercises}}.id");
            $query->andWhere(['{{%exercises_excategories}}.excategory_id'=>$this->categories]);
        }

        $dataProvider=new ActiveDataProvider([
            'query'=>$query
        ]);

        return $dataProvider;
    }

}