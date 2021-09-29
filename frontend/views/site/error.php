<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
$bundle=\frontend\assets\AppAsset::register($this);
$this->title = $name;
?>

<section class="error error-404">

    <div class="container-fluid">

        <div class="header-error">
            <a class="header-error__logo" href="<?=\yii\helpers\Url::to(['site/index'])?>">
                <img src="<?=$bundle->baseUrl?>/assets/logo_white.svg" alt="limitless">
            </a>
        </div>
        <div class="error-content__wrapper">
            <div class="content-box"></div>
            <div class="content">
                <p class="title"><?= Html::encode($this->title) ?></p>
                <p class="title-sm">
                    <?
                        if($this->title=='404') echo 'It looks like that page is missing.';
                        elseif($this->title=='405') echo 'VIP Only Area.';
                        elseif($this->title=='403') echo 'VIP Only Area.';
                        else echo nl2br(Html::encode($message))
                    ?>
                </p>

                <? if($this->title=='405'){ ?>
                    <p class="title sub">You are not allowed to access this page. Try logging in.</p>
                    <a class="btn btn-primary mx-auto" href="<?=\yii\helpers\Url::to(['auth/login'])?>">Login</a>
                <? }else{ ?>
                    <p class="title sub">Return to the homepage and try again.</p>
                    <a class="btn btn-primary mx-auto" href="<?=\yii\helpers\Url::to(['site/index'])?>">Home</a>
                <? } ?>
            </div>
        </div>

    </div>

</section>
