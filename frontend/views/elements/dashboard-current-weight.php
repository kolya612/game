<?php
    $bundle=\frontend\assets\AppAsset::register($this);

    $weight = Yii::$app->user->identity->lastWeight;
?>

<div class="item_block">
    <a href="#" onclick="$('#popup_weight').modal('show');return false;" class="addbtn">
        <i class="fas fa-plus"></i>
    </a>
    <img src="<?=$bundle->baseUrl?>/assets/Icon1.svg" alt=""/>
    <div class="information">
        <h4>Current Weight (lbs)</h4>
        <? if(!$weight){ ?>
                <a href="#" onclick="$('#popup_weight').modal('show');return false;" class="click">Click to Log</a>
        <? }else{ ?>
                <h3>
                    <?=$weight?>
                    <? $diff=Yii::$app->user->identity->lastWeightDiff?>
                    <? if($diff){ ?>
                        <span class="badge_green <? if($diff>0 && Yii::$app->user->identity->goal==\backend\modules\members\models\Members::WEIGHT_LOSS_GOAL) echo "badge_red"; ?> "><?=sprintf("%.01f",abs($diff))?></span>
                    <? } ?>
                </h3>
        <? } ?>
    </div>
</div>