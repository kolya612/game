<?php

namespace backend\modules\monsters\models;

use Yii;
use common\models\WbpActiveRecord;

class Monsters  extends WbpActiveRecord
{
    public static $imageTypes = ['page_img'];

    const ACTION = '/admin/pages';
    const TITLE = 'Monsters';


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%monsters}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string','on' => [self::ADMIN_ADD_SCENARIO, self::ADMIN_EDIT_SCENARIO]],
            [['lvl','life','magic','agility','strength','intelligence','status'], 'integer']
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