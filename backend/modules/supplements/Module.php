<?php

namespace backend\modules\supplements;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\supplements\controllers';
    public $title =                     'Supplements';
    public $addPageTitle =              'Add new supplement';
    public $editPageTitle =             'Edit supplement';
    public $addButtonTitle =            'Add supplement';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this supplement?';
    public $deleteSuccessText =         'Your supplement has been deleted.';
    public $deleteCancelText =          'Your supplement is safe :)';

    public function init()
    {
        parent::init();
    }

    public static $module_actions = [
        'index' => [
            [
                'controller' => 'default',
                'action' => 'index'
            ],
            [
                'controller' => 'default',
                'action' => 'getImage'
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

