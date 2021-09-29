<?php


namespace backend\models;


use common\models\Config;

class BaseModule extends \yii\base\Module
{
    public $title =                     'Base Module';
    public $addPageTitle =              'Add new item';
    public $editPageTitle =             'Edit item';
    public $addButtonTitle =            'Add';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this item?';
    public $deleteSuccessText =         'Your item has been deleted.';
    public $deleteCancelText =          'Your imaginary item is safe :)';

    public function getSeoTitle($action=false){
        if(!$action) $action=\Yii::$app->controller->action->id;

        return Config::getParameter('title').' - '.$this->title;
    }


    public function hasAddAction(){
        $actions=static::$module_actions;

        if(isset($actions['add'])) return true;
    }

    public static $module_actions = [
        'index' => [
            [
                'controller' => 'default',
                'action' => 'index'
            ]
        ],
        'add' => [
            [
                'controller' => 'default',
                'action' => 'add'
            ],
            [
                'controller' => 'default',
                'action' => 'uploadImage'
            ],
            [
                'controller' => 'default',
                'action' => 'getImage'
            ]
        ],
        'edit' => [
            [
                'controller' => 'default',
                'action' => 'edit'
            ],
            [
                'controller' => 'default',
                'action' => 'uploadImage'
            ],
            [
                'controller' => 'default',
                'action' => 'getImage'
            ]
        ],
        'delete' => [
            [
                'controller' => 'default',
                'action' => 'delete'
            ]
        ]
    ];
}