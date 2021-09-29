<?php

namespace backend\modules\preferences;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace;
    public $title =                     'Preferences';
    public $addPageTitle =              'Add new preference';
    public $editPageTitle =             'Edit preference';
    public $addButtonTitle =            'Add preference';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this preference?';
    public $deleteSuccessText =         'Your preference has been deleted.';
    public $deleteCancelText =          'Your preference is safe :)';

    public $text = [
        'module_name' => 'Settings',
    ];

    public $actions;

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
