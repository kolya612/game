<?php

namespace backend\modules\meals\models;

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

    const ACTION = '/admin/meals';

    public function rules()
    {
        return [
            [['search'], 'safe']
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

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'key' => 'id'
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id
        ]);

        if($this->search){
            $query->andWhere('title like :search 
                           OR short_text like :search
                           OR price like :search
                           OR sale_price like :search
                           OR id like :search
            ', ['search'=>'%'.$this->search.'%']);
        }

        $query->orderBy(['id' => SORT_DESC]);

        return $dataProvider;
    }
}