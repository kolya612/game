<?php

namespace backend\modules\excategories\models;

use Yii;
use common\models\WbpActiveRecord;

class Excategories  extends WbpActiveRecord
{
    public static $imageTypes = ['excategory_img'];

    const ACTION = '/admin/excategories';
    const TITLE = 'Excategories';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%excategories}}';
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