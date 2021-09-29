<?php
namespace frontend\models;

use backend\modules\meals\models\Meals;
use backend\modules\supplements\models\Supplements;
use backend\modules\workouts\models\Workouts;
use common\models\WbpActiveRecord;
use wbp\dumper\Dumper;
use Yii;
use yii\base\BaseObject;
use backend\modules\members\models\MemberPlans;


class OrderItems extends WbpActiveRecord
{
    const SCENARIO_FRONTEND = 'frontend';

    /**
     * {@inheritdoc}
     */

    public static function tableName()
    {
        return '{{%order_items}}';
    }

    public function rules()
    {
        return [
            [[
                'type',
                'title',
             ], 'string'],
            [[
                'external_id',
                'order_id',
                'item_id',
                'goal',
                'workout_often',
                'gender',
                'phase',
                'quantity',
                'percent',
             ], 'integer'],
            [['price'], 'double']
        ];
    }

    public static function createItems($order_id)
    {
        $cart = Yii::$app->cart;

        foreach ($cart->getPositions() as $item){

            $order_items = new OrderItems();
            $item_data = $item->getAttributes();
            $order_items->load($item_data,'');

            $order_items->order_id = $order_id;
            $order_items->item_id = $item->id;
            $order_items->type = $item::TYPE;
            $order_items->price = $item->getPrice();
            $order_items->old_price = $item->price;
            $order_items->quantity = $item->getQuantity();

            $order_items->save();
        }
    }

    public function getProduct(){
        if($this->type=='supplement') return $this->hasOne(Supplements::className(),['id'=>'item_id']);
        elseif($this->type=='meal') return $this->hasOne(Meals::className(),['id'=>'item_id']);
        elseif($this->type=='workout') return $this->hasOne(Workouts::className(),['id'=>'item_id']);
        return false;
    }

    public function afterSave($insert, $changedAttributes)
    {
        if($this->order->payment_status==Orders::PAYMENT_APPROVED && ($this->type == 'workout' || $this->type == 'meal')) {
            MemberPlans::addMemberPlan($this);
        }

        return parent::afterSave($insert, $changedAttributes);
    }

    public function getOrder(){
        return $this->hasOne(Orders::className(),['id'=>'order_id']);
    }

    public function getExternalId(){
        return $this->external_id;
    }
}
