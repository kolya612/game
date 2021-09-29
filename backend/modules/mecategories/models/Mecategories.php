<?php

namespace backend\modules\mecategories\models;

use Yii;
use common\models\WbpActiveRecord;

class Mecategories  extends WbpActiveRecord
{
    public static $imageTypes = ['mecategory_img'];

    const ACTION = '/admin/mecategories';
    const TITLE = 'Mecategories';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%mecategories}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title','color'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['sort'], 'integer']
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
}