<?php
    $bundle=\frontend\assets\AppAsset::register($this);

    $fat = Yii::$app->user->identity->lastFat;
?>

<div class="item_block">
    <a href="#" onclick="$('#popup_body-fat').modal('show');return false;" class="addbtn">
        <i class="fas fa-plus"></i>
    </a>
    <img src="<?=$bundle->baseUrl?>/assets/Group2.svg" alt=""/>
    <div class="information">
        <h4>Body Fat %</h4>
        <? if(!$fat){ ?>
                <a href="#" onclick="$('#popup_body-fat').modal('show');return false;" class="click">Click to Log</a>
        <? }else{ ?>
                <h3>
                    <?=$fat?>
                    <? $diff=Yii::$app->user->identity->lastFatDiff?>
                    <? if($diff){ ?>
                        <span class="badge_green <? if($diff>0 && Yii::$app->user->identity->goal==\backend\modules\members\models\Members::WEIGHT_LOSS_GOAL) echo "badge_red"; ?> "><?=sprintf("%.01f",abs($diff))?></span>
                    <? } ?>
                </h3>
        <? } ?>
    </div>
</div>