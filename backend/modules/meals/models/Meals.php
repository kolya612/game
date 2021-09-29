<?php

namespace backend\modules\meals\models;

use backend\modules\meals\models\MealsMecategories;
use backend\modules\mecategories\models\Mecategories;
use wbp\cart\ItemTrait;
use Yii;
use common\models\WbpActiveRecord;
use yii\base\BaseObject;
use yz\shoppingcart\CartPositionInterface;

class Meals  extends WbpActiveRecord implements CartPositionInterface
{
    use ItemTrait;

    public static $imageTypes = ['meal_main'];
    public static $fileTypes = ['meal_pdf'];
    const TYPE = 'meal';

    public $shippable = false;

    const ACTION = '/admin/meals';
    const TITLE = 'Meals';

    protected $linkParams=[
        'mecategories_ids'=>[
            'class'=>'\backend\modules\meals\models\MealsMecategories',
            'param_id'=>'mecategory_id',
            'model_id'=>'meal_id'
        ]
    ];

    public $mecategories_ids;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%meals}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['short_text','seo_title','seo_description','seo_keywords'], 'string', 'max' => 250],
            [['text'], 'string'],
            [['status','gender','phase'], 'integer', 'max' => 6],
            [['goal','percent'], 'integer'],
            [['viewed'], 'integer'],
            [['price','sale_price'], 'double'],
            [['mecategoriesIds'],'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }

    public function getMecategories()
    {
        return $this->hasMany(Mecategories::className(), ['id' => 'mecategory_id'])
            ->viaTable(MealsMecategories::tableName(), ['meal_id' => 'id']);
    }

    public function getMecategoriesIds()
    {
        if($this->mecategories_ids) return $this->mecategories_ids;
        $result=[];
        $mecategories = $this->getMecategories()->all();
        foreach ($mecategories as $mecategory){
            $result[]=$mecategory->id;
        }
        $this->mecategories_ids=$result;
        return $this->mecategories_ids;
    }

    public function setMecategoriesIds($value)
    {
        $this->mecategories_ids=$value;
    }

    public function getMealsMecategories()
    {
        return $this->hasMany(MealsMecategories::className(), ['meal_id' => 'id']);
    }

    public function afterSave($insert, $changedAttributes)
    {
        MealsMecategories::deleteAll(['meal_id' => $this->id]);

        if (!empty($this->mecategories_ids)) {
            foreach ($this->mecategories_ids as $mecategory_id) {
                $newModel = NEW MealsMecategories();
                $newModel->meal_id = $this->id;
                $newModel->mecategory_id = $mecategory_id;
                $newModel->save();
            }
        }

        return parent::afterSave($insert, $changedAttributes);
    }

    public function afterDelete()
    {
        MealsMecategories::deleteAll(['meal_id' => $this->id]);

        parent::afterDelete();
    }

}