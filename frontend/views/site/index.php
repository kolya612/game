<?php

/* @var $this yii\web\View */

$bundle=\frontend\assets\AppAsset::register($this);

?>

<section class="dashboard pp">
    <div class="container">
        <div class="header-board">
                <div class="header-board__top">
                    <h1 class="title">Welcome <?=Yii::$app->user->identity->getNick()?>!</h1>
                </div>
        </div>

        <div class="row">
            <div class="col-3">
                Лес
            </div>
            <div class="col-3">
                Озеро
            </div>
            <div class="col-3">
                Рыбалка
            </div>
            <div class="col-3">
                <a href="<?=\yii\helpers\Url::to(['/bestiary'])?>">Бестиарий</a>
            </div>
        </div>
    </div>
</section>