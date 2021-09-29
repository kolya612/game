<?php

namespace backend\modules\workouts\models;

use common\models\WbpActiveRecord;

class WorkoutsExercises extends WbpActiveRecord
{
    public static function tableName()
    {
        return '{{%workouts_exercises}}';
    }
}
