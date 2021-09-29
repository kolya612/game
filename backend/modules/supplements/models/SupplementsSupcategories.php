<?php

namespace backend\modules\supplements\models;

use common\models\WbpActiveRecord;

class SupplementsSupcategories extends WbpActiveRecord
{
    public static function tableName()
    {
        return '{{%supplements_supcategories}}';
    }
}
