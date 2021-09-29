<?php
    $lastProgress=Yii::$app->user->identity->getLastProgressPhoto()->one();
?>

<div class="bg_lightgrey">
    <? if(!$lastProgress){?>
        <h4>Start your first photo checkin.</h4>
        <p>
            Learn how to perform your photo checkin. For best results we recommend you checkin weekly.
        </p>

        <a href="<?=\yii\helpers\Url::to(['my-progress/add-photo'])?>" class="btn check_in_2">Continue </a>
    <? }else{ ?>
        <h4>Your most recent photo checkin.</h4>
        <p class="mb-4">Check in weekly for best results.</p>
        <p><b><?=Yii::$app->formatter->asDate($lastProgress->date, 'medium')?></b></p>

        <div class="owl-carousel slide-two pt-3">
            <img src="<?=$lastProgress->getImage(\backend\modules\progress\models\Progress::$imageTypes[0])->getUrl()?>" alt=""/>
            <img src="<?=$lastProgress->getImage(\backend\modules\progress\models\Progress::$imageTypes[1])->getUrl()?>" alt=""/>
            <img src="<?=$lastProgress->getImage(\backend\modules\progress\models\Progress::$imageTypes[2])->getUrl()?>" alt=""/>
        </div>
        <a href="<?=\yii\helpers\Url::to(['my-progress/index'])?>" class="btn check_in_2">View All</a>
    <? } ?>
</div>
