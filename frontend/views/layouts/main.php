<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$bundle = AppAsset::register($this);
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
<body <?= (Yii::$app->controller->id == 'exercise' && Yii::$app->controller->action->id == 'view') ? 'class="video-page"' : '' ?>>
<?php $this->beginBody() ?>

<section class="mask__loader">
    <div class="loader">
        <svg width="47" height="30" viewBox="0 0 47 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M46.6509 12.6294C46.5579 11.9851 46.4649 11.3408 46.2789 10.7885C46.0929 10.1442 45.7209 9.59192 45.1629 9.13169C44.8839 8.9476 44.605 8.7635 44.233 8.67146C43.861 8.57941 43.582 8.57941 43.21 8.57941C42.559 8.67146 41.9081 8.85555 41.3501 9.13169C40.7921 9.40782 40.2341 9.68396 39.6761 9.9601C38.0952 10.8806 36.6073 11.8931 35.2123 12.9976C33.8174 12.1692 32.4224 11.2487 31.0275 10.3283C28.8886 8.9476 26.8427 7.56691 24.6108 6.27827C23.5878 5.72599 22.6578 5.17372 21.6349 4.62145C11.6843 -1.36153 2.57065 -3.47858 0.0597543 10.4203C0.0597543 10.4203 -0.126236 11.4328 0.152753 10.6965C1.82668 8.21123 3.50061 6.37031 5.26754 5.17372C4.80256 5.91009 4.52357 6.7385 4.24459 7.47486C3.8726 8.7635 3.59361 10.0521 3.50062 11.3408C3.40762 12.6294 3.31462 13.9181 3.31462 15.2067C3.31462 16.4953 3.40762 17.6919 3.50062 18.9806C3.59361 20.2692 3.7796 21.5579 4.05859 22.7545C4.33758 24.0431 4.70957 25.2397 5.36054 26.4363C5.63953 26.9886 6.01152 27.6329 6.4765 28.0931C6.66249 28.3692 6.94147 28.5533 7.22046 28.8295C7.49945 29.0136 7.77844 29.1977 8.15043 29.3818C8.8014 29.6579 9.45237 29.842 10.1963 29.842C10.8473 29.842 11.5913 29.842 12.2423 29.6579C13.5442 29.3818 14.7532 28.8295 15.8691 28.2772C18.101 27.0806 20.1469 25.6079 22.1929 24.1351C26.1917 21.0976 29.9115 17.6919 33.8174 14.5624C34.0964 14.2862 34.4684 14.1022 34.7473 13.826C35.4913 14.2862 36.2353 14.6544 37.0723 15.1147C38.1882 15.6669 39.3042 16.3113 40.5131 16.7715C41.0711 17.0476 41.7221 17.2317 42.373 17.3238C43.024 17.5078 43.675 17.5999 44.326 17.4158C44.6979 17.3238 44.9769 17.2317 45.3489 17.0476C45.6279 16.8635 45.9069 16.5874 46.0929 16.3113C46.4649 15.759 46.6509 15.0226 46.7439 14.4703C46.7439 14.1022 46.8368 13.826 46.8368 13.5499C46.6509 13.2737 46.6509 12.9056 46.6509 12.6294ZM34.3754 13.734C34.0964 13.9181 33.8174 14.1942 33.5384 14.3783C29.6326 17.5079 25.8197 20.8215 21.7279 23.767C20.7049 24.5033 19.682 25.2397 18.659 25.884C17.636 26.5283 16.5201 27.1727 15.4041 27.6329C14.2882 28.1852 13.0792 28.5533 11.9633 28.8295C11.4053 28.9215 10.7543 28.9215 10.1963 28.9215C9.63836 28.8295 9.08039 28.7374 8.61541 28.4613C7.59245 28.0011 6.94148 26.9886 6.3835 25.9761C5.91852 24.9636 5.54653 23.767 5.36054 22.5704C4.98856 20.1772 4.89556 17.6919 4.98855 15.2988C5.08155 12.9056 5.26755 10.4203 6.01152 8.21123C6.3835 7.10668 6.94148 6.09418 7.59245 5.26577C8.33642 4.43735 9.17339 3.88508 10.2893 3.60894C11.3123 3.3328 12.5213 3.42485 13.6372 3.60894C14.8462 3.79303 15.9621 4.16122 17.0781 4.5294C18.194 4.89758 19.31 5.44986 20.4259 5.91009C21.5419 6.46236 22.7508 7.01464 23.8668 7.65896C26.0987 8.85555 28.2376 10.1442 30.3765 11.4328C31.5855 12.1692 32.7944 12.9056 34.0034 13.5499C34.0964 13.5499 34.2824 13.6419 34.3754 13.734ZM46.0929 14.4703C45.9999 15.0226 45.8139 15.6669 45.5349 16.1272C45.1629 16.5874 44.6979 16.8635 44.14 16.8635C43.582 16.9556 43.024 16.8635 42.373 16.6794C41.8151 16.4953 41.2571 16.3113 40.6061 16.0351C39.4902 15.5749 38.3742 14.9306 37.2583 14.3783C36.6073 14.0101 35.9563 13.6419 35.3053 13.2737C35.6773 12.9976 36.1423 12.6294 36.5143 12.3533C37.5372 11.6169 38.5602 10.8806 39.6761 10.3283C40.2341 10.0521 40.7921 9.77601 41.3501 9.49987C41.9081 9.31578 42.559 9.13169 43.117 9.03964C43.675 8.9476 44.326 9.13169 44.7909 9.49987C45.2559 9.86805 45.5349 10.4203 45.7209 10.9726C45.9069 11.5249 45.9999 12.1692 46.0929 12.7215C46.0929 12.9976 46.0929 13.3658 46.0929 13.6419C46.1859 13.826 46.1859 14.1942 46.0929 14.4703Z"
                  fill="#0011EE"/>
        </svg>

        <!--        <img src="--><? //=$bundle->baseUrl?><!--/assets/logo_blue-mobile.svg" alt="loader">-->
        <div class="loader__border"></div>
    </div>
</section>

<div class="container">
    <div style="position: relative" id="alerts">

    </div>
</div>

<?= $this->render('../elements/alert') ?>
<?= $this->render('../elements/menu') ?>

<?= $content ?>

<?= $this->render('../elements/fat-popup') ?>
<?= $this->render('../elements/weight-popup') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
