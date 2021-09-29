<?php

namespace backend\models;

use common\models\User;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * Login form
 */
class BaseSearchModel extends Model
{
    public $from,
        $to,
        $search,
        $order;

    public function rules()
    {
        return [
            [['order','from','to','search'], 'safe']
        ];
    }

    public function getOrder($query){
        if($this->order){
            $query->orderBy($this->order);
        }else {
            if(\Yii::$app->controller->sortEnable())
                $query->orderBy('sort, id desc');
            else
                $query->orderBy('id desc');
        }

        return $query;
    }

    public function attributeLabels()
    {
        return [
            'from'=>'Added From:',
            'to'=>'Added To:',
            'order'=>'Sort By:',
        ];
    }
}