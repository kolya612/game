<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$bundle=\backend\assets\AppAsset::register($this);

//$this->title = $exception->statusCode. ' - ' . $exception->getMessage();
?>

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Error-->
    <div class="d-flex flex-row-fluid flex-column bgi-size-cover bgi-position-center bgi-no-repeat p-10 p-sm-30" style="background-image: url(<?=$bundle->baseUrl?>/media/error/bg1.jpg);">
        <!--begin::Content-->
        <h1 class="font-weight-boldest text-dark-75 mt-15" style="font-size: 10rem"><?= Html::encode($exception->statusCode) ?></h1>
        <p class="font-size-h3 text-muted font-weight-normal"><?= nl2br(Html::encode($exception->getMessage())) ?></p>
        <!--end::Content-->
    </div>
    <!--end::Error-->
</div>
<!--end::Main-->