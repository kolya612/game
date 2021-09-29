<?php
    $bundle=\frontend\assets\AppAsset::register($this);
    $data = Yii::$app->user->identity->getTotalGainsLosses();
?>

<div class="item_block">
    <img src="<?=$bundle->baseUrl?>/assets/Group3.svg" alt=""/>
    <div class="information">
        <h4>Total <?=$data['title']?></h4>
        <h3 class="greycolor"><?=$data['value']?></h3>
    </div>
</div>
