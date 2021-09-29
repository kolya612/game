<?php

namespace backend\modules\employees\models;

use backend\models\BaseSearchModel;
use wbp\dumper\Dumper;
use yii\data\ActiveDataProvider;

/**
 * Login form
 */
class SearchModel extends BaseSearchModel
{
    public $from,
        $to,
        $search,
        $order,
        $id;

    public function rules()
    {
        return [
            [['search'], 'safe'],
        ];
    }


    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($modelName,$params)
    {
        $query = $modelName::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'key' => 'id'
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id
        ]);

        if($this->search){
            $query->andWhere('first_name like :search 
                            OR last_name like :search 
                            OR username like :search 
                            OR email like :search 
                            OR phone like :search',
                ['search'=>'%'.$this->search.'%']);
        }

        return $dataProvider;
    }

    public function attributeLabels()
    {
        return [
            'first_name'=>'first_name',
            'last_name'=>'last_name',
            'order'=>'Sort By:',
            'gender'=>'Gender'
        ];
    }
}