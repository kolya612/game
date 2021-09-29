<?php

namespace backend\modules\workouts\models;

use backend\modules\workouts\models\WorkoutsExercises;
use backend\modules\exercises\models\Exercises;
use wbp\cart\ItemTrait;
use Yii;
use common\models\WbpActiveRecord;
use yz\shoppingcart\CartPositionInterface;


class Workouts  extends WbpActiveRecord implements CartPositionInterface
{
    use ItemTrait;

    public static $imageTypes = ['workout_main','workout_pdf_image'];
    public static $fileTypes = ['workout_pdf'];
    const TYPE = 'workout';
    public $shippable = false;

    const ACTION = '/admin/workouts';
    const TITLE = 'Workouts';

    protected $linkParams=[
        'exercise_ids'=>[
            'class'=>'\backend\modules\workouts\models\WorkoutsExercises',
            'param_id'=>'exercise_id',
            'model_id'=>'workout_id'
        ]
    ];

    public $exercises_ids;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%workouts}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['short_text','seo_title','seo_description','seo_keywords'], 'string', 'max' => 250],
            [['text'], 'string'],
            [['status','gender','phase'], 'integer', 'max' => 6],
            [['goal','workout_often','percent'], 'integer'],
            [['viewed'], 'integer'],
            [['price','sale_price'], 'double'],
            [['exercisesIds'],'safe']
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

    public function getExercises()
    {
        return $this->hasMany(Exercises::className(), ['id' => 'exercise_id'])
            ->viaTable(WorkoutsExercises::tableName(), ['workout_id' => 'id']);
    }

    public function getExercisesIds()
    {
        if($this->exercises_ids) return $this->exercises_ids;
        $result=[];
        $exercises = $this->getExercises()->all();
        foreach ($exercises as $exercise){
            $result[]=$exercise->id;
        }
        $this->exercises_ids=$result;
        return $this->exercises_ids;
    }

    public function setExercisesIds($value)
    {
        $this->exercises_ids=$value;
    }

    public function getWorkoutsExercises()
    {
        return $this->hasMany(WorkoutsExercises::className(), ['workout_id' => 'id']);
    }

    public function afterSave($insert, $changedAttributes)
    {
        WorkoutsExercises::deleteAll(['workout_id' => $this->id]);

        if (!empty($this->exercises_ids)) {
            foreach ($this->exercises_ids as $exercise_id) {
                $newModel = NEW WorkoutsExercises();
                $newModel->workout_id = $this->id;
                $newModel->exercise_id = $exercise_id;
                $newModel->save();
            }
        }

        return parent::afterSave($insert, $changedAttributes);
    }

    public function checkCurrentMemberPermission(){
        $plans = Yii::$app->user->identity->getActiveWorkoutPlans()->andWhere(['plan_id'=>$this->id])->one();

        if($plans) return true;

        return false;
    }

    public function afterDelete()
    {
        WorkoutsExercises::deleteAll(['workout_id' => $this->id]);

        parent::afterDelete();
    }

}