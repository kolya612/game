<?php

namespace backend\modules\exercises\models;

use backend\modules\excategories\models\Excategories;
use backend\modules\exercises\models\ExercisesExcategories;
use Yii;
use common\models\WbpActiveRecord;
use yii\base\BaseObject;

class Exercises  extends WbpActiveRecord
{
    public static $imageTypes = ['exercises_main'];

    const ACTION = '/admin/exercises';
    const TITLE = 'Exercises';

    protected $linkParams=[
        'excategories_ids'=>[
            'class'=>'\backend\modules\exercises\models\ExercisesExcategories',
            'param_id'=>'excategory_id',
            'model_id'=>'exercise_id'
        ]
    ];

    public $excategories_ids;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%exercises}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['short_text','video','seo_title','seo_description','seo_keywords'], 'string', 'max' => 250],
            [['time'], 'string', 'max' => 20],
            [['text'], 'string'],
            [['status'], 'integer', 'max' => 6],
            [['viewed'], 'integer'],
            [['excategoriesIds'],'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    public function getExcategories()
    {
        return $this->hasMany(Excategories::className(), ['id' => 'excategory_id'])
            ->viaTable(ExercisesExcategories::tableName(), ['exercise_id' => 'id']);
    }

    public function getExcategoriesIds()
    {
        $this->excategories_ids = $this->getExcategories()->all();

        if($this->excategories_ids) return $this->excategories_ids;
        $result=[];
        $excategories = $this->getExcategories()->all();
        foreach ($excategories as $excategory){
            $result[]=$excategory->id;
        }
        $this->excategories_ids=$result;
        return $this->excategories_ids;
    }

    public function setExcategoriesIds($value)
    {
        $this->excategories_ids = $value;
    }




    public function getExercisesExcategories()
    {
        return $this->hasMany(ExercisesExcategories::className(), ['exercise_id' => 'id']);
    }

    public function afterSave($insert, $changedAttributes)
    {
        ExercisesExcategories::deleteAll(['exercise_id' => $this->id]);

        if (!empty($this->excategories_ids)) {
            foreach ($this->excategories_ids as $excategory_id) {
                $newModel = NEW ExercisesExcategories();
                $newModel->exercise_id = $this->id;
                $newModel->excategory_id = $excategory_id;
                $newModel->save();
            }
        }

        return parent::afterSave($insert, $changedAttributes);
    }

    public function afterDelete()
    {
        ExercisesExcategories::deleteAll(['exercise_id' => $this->id]);

        parent::afterDelete();
    }

}