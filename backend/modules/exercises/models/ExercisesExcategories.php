<?php

namespace backend\modules\exercises\models;

use common\models\WbpActiveRecord;

class ExercisesExcategories extends WbpActiveRecord
{
    public static function tableName()
    {
        return '{{%exercises_excategories}}';
    }
}
