<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@frontend/../slice/dist';
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $css = [
        "styles/plugins/normalize.css",
        "styles/plugins/bootstrap.min.css",
        "styles/plugins/allFontAwesome.css",
        "styles/plugins/owl.carousel.min.css",
        "styles/plugins/owl.theme.default.min.css",
        "styles/plugins/jquery.fancybox.min.css",
        "styles/plugins/daterangepicker.css",
        'styles/style.min.css',
    ];
    public $js = [
        "scripts/plugins/bootstrap.bundle.min.js",
//        "scripts/plugins/bootstrap.min.js",
        "scripts/plugins/owl.carousel.min.js",
        "scripts/plugins/jquery.fancybox.min.js",
        "scripts/plugins/moment.min.js",
        "scripts/plugins/daterangepicker.js",
        "scripts/script.min.js",
        'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',
        'https://cdn.jwplayer.com/libraries/46zsTJPm.js',

        'scripts/plugins/Chart.js',
        "scripts/plugins/creditcard.js",
        "scripts/plugins/imask.min.js"
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
