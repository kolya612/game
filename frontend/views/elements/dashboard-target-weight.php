<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>

<div class="item_block">
    <img src="<?=$bundle->baseUrl?>/assets/Group1.svg" alt=""/>
    <div class="information">
        <h4>Target Weight (lbs)</h4>
        <h3><?=Yii::$app->user->identity->goal_weight?></h3>
    </div>
</div>
