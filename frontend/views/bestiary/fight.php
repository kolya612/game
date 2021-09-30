<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$bundle=\frontend\assets\AppAsset::register($this);

?>

<section class="dashboard pp">
    <div class="container">
        <div class="header-board">
            <div class="header-board__top">
                <h1 class="title">Welcome <?=Yii::$app->user->identity->getNick()?>!</h1>
            </div>
        </div>
        <?= Html::beginForm([''], 'post') ?>
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="col-4">
                            Здоровье: <?=$fighter->life?><br />
                            Маны: <?=$fighter->magic?><br />
                        </div>
                        <div class="col-8">
                            <p>Вы:</p>
                            <div>
                                <input type="radio" name="protection" value="1">
                                <label>Голова</label>
                                <br /><br />
                                <input type="radio"  name="protection" value="2">
                                <label>Тело</label>
                                <br /><br />
                                <input type="radio"  name="protection" value="3">
                                <label>Ноги</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-8">
                            <p>Противник:</p>
                            <div>
                                <input type="radio" name="hit" value="1">
                                <label>Голова</label>
                                <br /><br />
                                <input type="radio"  name="hit" value="2">
                                <label>Тело</label>
                                <br /><br />
                                <input type="radio"  name="hit" value="3">
                                <label>Ноги</label>
                            </div>
                        </div>
                        <div class="col-4">
                            Здоровье: <?=$monster->life?><br />
                            Маны: <?=$monster->magic?><br />
                        </div>
                    </div>
                </div>
                <p><input type="submit" value="Ударить"></p>
                <?= Html::endForm() ?>

                <div class="col-2"></div>
                <div class="col-8"><?php
                    foreach ($message as $msg) {
                        echo '<p>' . $msg . '</p>';
                    }
                ?></div>
                <div class="col-2"></div>
            </div>

    </div>
</section>