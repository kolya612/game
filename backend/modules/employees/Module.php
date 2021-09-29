<?php

namespace backend\modules\employees;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\employees\controllers';

    public $title =                     'Employees';
    public $addPageTitle =              'Add new employee';
    public $editPageTitle =             'Edit employee';
    public $addButtonTitle =            'Add employee';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this employee?';
    public $deleteSuccessText =         'Your employee has been deleted.';
    public $deleteCancelText =          'Your employee is safe :)';

    public function init()
    {
        parent::init();
    }

    public $action = '/admin/employees';

    public $text = [
        'add_item' => 'Add Employee',
        'module_name' => 'Employees',
        'edit_item' => 'Edit Employee',
        'remove_item' => 'Remove Employee',
        'total_items' => 'Total Employees',
    ];

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

