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
            <?php foreach ($monsters as $monster) { ?>
                <div class="col-3">
                    <a href="<?=\yii\helpers\Url::to(['bestiary/fight','id' => $monster->id])?>">
                        <h1 class="title"><?=$monster->title?></h1>
                        <p>В бой</p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>