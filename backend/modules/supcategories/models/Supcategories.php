<?php

namespace backend\modules\supcategories\models;

use Yii;
use common\models\WbpActiveRecord;

class Supcategories  extends WbpActiveRecord
{
    public static $imageTypes = ['supcategory_img'];

    const ACTION = '/admin/supcategories';
    const TITLE = 'Supcategories';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%supcategories}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
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