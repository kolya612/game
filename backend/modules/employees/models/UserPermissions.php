<?php

namespace backend\modules\employees\models;

use common\models\WbpActiveRecord;

class UserPermissions extends WbpActiveRecord
{
    public static function tableName()
    {
        return '{{%user_permissions}}';
    }
}
