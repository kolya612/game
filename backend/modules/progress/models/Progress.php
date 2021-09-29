<?php

namespace backend\modules\progress\models;

use backend\modules\members\models\Members;
use Yii;
use common\models\WbpActiveRecord;

class Progress  extends WbpActiveRecord
{
    public static $imageTypes = ['progress_front','progress_side','progress_back'];

    const ACTION = '/admin/progress';
    const TITLE = 'Progress';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%members_progress}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id'], 'integer','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['fat'], 'double','min' => 0,'max' => 100],
            [['weight'], 'double','min' => 50,'max' => 600],
//            ['date', 'date', 'format' => 'php:Y-m-d']
        ];
    }

    public function setDate($value){
        $this->date=date("Y-m-d",strtotime($value));
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => 'Member ID',
        ];
    }

    public function getMember()
    {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }

    public function getFormatedDate(){
        return date("m/d/Y", strtotime($this->date));
    }


}