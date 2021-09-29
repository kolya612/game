<?php
namespace backend\modules\members\models;

use backend\modules\members\models\Members;
use common\models\WbpActiveRecord;

/**
 * Owners model
 */

class MembersAuth extends WbpActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%members_auth}}';
    }

    public function getUser()
    {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }
}
