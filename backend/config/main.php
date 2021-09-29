<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

$config = [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'homeUrl' => '/admin',
    'components' => [
        'request' => [
            'baseUrl' => '/admin',
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'i18n'=>array(
            'translations' => array(
                '*'=>array(
                    'class' => 'wbp\lang\PhpMessageSource',
                    'basePath' => "@backend/messages",
                    'sourceLanguage' => 'en_US',
                    'fileMap' => array(
                    )
                ),
            )
        ),
        'lang' => [
            'class'=>'wbp\lang\Lang',
            'languages'=>[
                'en_US'=>'',
            ],
            'languagesUrls'=>[
                'en_US'=>'',
            ],
        ],

        'urlManager' => [
            'class'=>'wbp\urlManager\UrlManager',
            'ruleConfig'=>['class'=>'\wbp\urlManager\UrlRule'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => 'site/index',
                'login' => 'site/login',
                'logout' => 'site/logout',

                '/elfinder/<action:[\w\-]+>' => 'elfinder/<action>',        // FOR CKEDITOR UPLOADER
                '<module:[\w\-]+>' => '<module>/default/index',

                '<module:[\w\-]+>/<action:(edit|add|view)>' => '<module>/default/<action>',
                '<module:[\w\-]+>/<action:(get-shopping-cart|get-regions)>' => '<module>/default/<action>',     //for orders
                '<module:[\w\-]+>/<controller:[\w\-]+>' => '<module>/<controller>/index',
                '<module:[\w\-]+>/<controller:[\w\-]+>/<action:[\w\-]+>' => '<module>/<controller>/<action>',
                '<module:[\w\-]+>/<action>' => '<module>/default/<action>'

            ],
        ],
    ],
    'params' => $params,
];


$scan = scandir(__DIR__.'/../modules');
foreach($scan as $file) {
    if (is_dir(__DIR__."/../modules/".$file)) {
        if($file!='..' && $file!='.'){
            if(file_exists(__DIR__."/../modules/".$file."/Module.php")){
                $config['modules'][$file]=['class' => 'backend\\modules\\'.$file.'\\Module'];
            }
        }
    }
}

return $config;

