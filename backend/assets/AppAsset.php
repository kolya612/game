<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@backend/web/metronic_7_2_5';
    public $css = [
        'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700',
        //'css/site.css',
        'plugins/custom/datatables/datatables.bundle.css',
        'plugins/global/plugins.bundle.css',
        'plugins/custom/prismjs/prismjs.bundle.css',
        'css/style.bundle.css',
        'css/themes/layout/header/base/light.css',
        'css/themes/layout/header/menu/light.css',
        'css/themes/layout/brand/dark.css',
        'css/themes/layout/aside/dark.css',
        'plugins/custom/fullcalendar/fullcalendar.bundle.css',
        "plugins/custom/sweetalert2/dist/sweetalert2.min.css",
        'css/dev.css',
    ];
    public $js = [
        'plugins/global/plugins.bundle.js',
        'js/scripts.bundle.js',
        'plugins/custom/sweetalert2/dist/sweetalert2.min.js',
        //'plugins/custom/prismjs/prismjs.bundle.js',
        //'plugins/custom/fullcalendar/fullcalendar.bundle.js',
        //'plugins/custom/datatables/datatables.bundle.js',
        //'js/pages/crud/datatables/advanced/column-rendering.js',
        //'js/pages/widgets.js',
        //'js/pages/crud/file-upload/image-input.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];

    public static function register($view) {
        $js = '
            var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };
        ';
        $view->registerJs($js, \yii\web\View::POS_END);
        $bundle=parent::register($view);

        return $bundle;
    }
}
