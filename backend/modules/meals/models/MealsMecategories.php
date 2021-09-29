<?php

namespace backend\modules\meals\models;

use common\models\WbpActiveRecord;

class MealsMecategories extends WbpActiveRecord
{
    public static function tableName()
    {
        return '{{%meals_mecategories}}';
    }
}
