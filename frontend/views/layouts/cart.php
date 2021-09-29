<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);

$bundle=\frontend\assets\AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<section class="mask__loader">
    <div class="loader">
        <picture><source srcset="<?=$bundle->baseUrl?>/assets/logo_blue-mobile.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/logo_blue-mobile.svg" alt="loader"></picture>
        <div class="loader__border"></div>
    </div>
</section>

<header class="checkout-header">
    <div class="container">
        <div class="checkout-header__wrapper">
            <a class="logo" href="<?=\yii\helpers\Url::to(['site/index'])?>">
                <picture><source srcset="<?=$bundle->baseUrl?>/assets/logo_blue.svg" type="image/webp"><img src="<?=$bundle->baseUrl?>/assets/logo_blue.svg" alt="limitless"></picture>
            </a>

            <a class="return-link link-primary" href="<?=\yii\helpers\Url::to(['shop/index'])?>">Return to Shop</a>
        </div>
    </div>
</header>


<?=$content?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

