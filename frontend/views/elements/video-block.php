<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>

<a href="<?=\yii\helpers\Url::to(['exercise/view','id'=>$model->id])?>" class="block_video">
    <span class="play_icon">
        <img src="<?=$bundle->baseUrl?>/images/Vector.png" alt=""/>
    </span>
    <span class="time_video"><?=$model->time?></span>
    <img src="<?=$model->image->getUrl()?>" alt=""/>
    <span class="description_video">
        <? foreach ($model->excategories as $category){ ?>
                <span class="categories_tag <?=$category->color?>"><?=$category->title?></span>
        <? } ?>
        <span class="text">
            <?=$model->short_text?>
        </span>
    </span>
</a>
