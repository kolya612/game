<?php
namespace backend\modules\members\models;

use backend\modules\exercises\models\Exercises;
use common\models\WbpActiveRecord;

/**
 * Owners model
 */

class MembersViewHistory extends WbpActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%members_view_history}}';
    }

    public function getMember()
    {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }

    public function getExercise()
    {
        return $this->hasOne(Exercises::className(), ['id' => 'exercise_id']);
    }

    public static function addHistory($id){

        $find=self::find()->andWhere([
            'member_id'=>\Yii::$app->user->identity->id
        ])->orderBy('id desc')->one();

        if($find->exercise_id==$id) return false;

        $new=new self();
        $new->member_id=\Yii::$app->user->identity->id;
        $new->exercise_id=$id;
        $new->save();
    }

}
