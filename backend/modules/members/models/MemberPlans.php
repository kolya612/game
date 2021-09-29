<?php
namespace backend\modules\members\models;

use backend\modules\meals\models\Meals;
use backend\modules\members\models\Members;
use backend\modules\workouts\models\Workouts;
use common\models\WbpActiveRecord;
use Yii;
use yii\base\BaseObject;

/**
 * Owners model
 */

class MemberPlans extends WbpActiveRecord
{

    const WORKOUT_PLAN=1;
    const MEAL_PLAN=2;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%member_plans}}';
    }

    public function getUser()
    {
        return $this->hasOne(Members::className(), ['id' => 'member_id']);
    }

    public function getPlan(){
        if($this->plan_type==self::WORKOUT_PLAN) return $this->hasOne(Workouts::className(),['id'=>'plan_id']);
        elseif($this->plan_type==self::MEAL_PLAN) return $this->hasOne(Meals::className(),['id'=>'plan_id']);
        return false;
    }

    public static function addMemberPlan($item)
    {
        if($item->type == 'workout') $type = 1;
        if($item->type == 'meal') $type = 2;

        $member_plan = new MemberPlans();

        $member_plan->plan_type = $type;
        $member_plan->plan_id = $item->item_id;
        $member_plan->member_id = Yii::$app->user->id;
        $member_plan->is_free  = 0;
        $member_plan->status = 1;

        $member_plan->save();
    }
}
