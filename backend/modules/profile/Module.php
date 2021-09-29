<?php

namespace backend\modules\profile;

use backend\models\BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'backend\modules\profile\controllers';

    public $title =                     'profile';
    public $addPageTitle =              'Add new profile';
    public $editPageTitle =             'Edit profile';
    public $addButtonTitle =            'Add profile';
    public $deleteButtonTitle =         'Delete';
    public $deleteConfirmationText =    'Are you sure want to delete this profile?';
    public $deleteSuccessText =         'Your profile has been deleted.';
    public $deleteCancelText =          'Your profile is safe :)';

    public function init()
    {
        parent::init();
    }

    public $action = '/admin/profile';

    public $text = [
        'module_name' => 'Profile',
        'edit_item' => 'Edit Profile',
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

