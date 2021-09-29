<?php
/**
 * @var $model \backend\modules\progress\models\Progress
 */
    $bundle=\frontend\assets\AppAsset::register($this);
?>




    <div class="progress-info">

        <div class="progress-info__top">
            <? if(isset($title)){ ?><p class="title"><?=$title?></p><? } ?>
            <p class="text"><?=Yii::$app->formatter->asDate($model->date,'medium')?></p>
        </div>

        <div class="progress-info__data">
            <p class="title">Weight</p>
            <? if($model->weight){ ?>
                <p class="text"><strong><?=$model->weight?></strong>lbs</p>
            <? }else{ ?>
                <button class="btn add-info" onclick="getWeightByDate('<?=$model->formatedDate?>',true); return false;">Enter Weight</button>
            <? } ?>
        </div>

        <div class="progress-info__data">
            <p class="title">Body Fat</p>
            <? if($model->fat){ ?>
                <p class="text"><strong><?=$model->fat?></strong>%</p>
            <? }else{ ?>
                <button class="btn add-info" onclick="getFatByDate('<?=$model->formatedDate?>',true); return false;">Enter Body Fat</button>
            <? } ?>
        </div>
    </div>

    <div class="progress-photo">
        <?
            $image=$model->getImage(\backend\modules\progress\models\Progress::$imageTypes[0]);
            if($image->id){
        ?>
                <div class="img-box" data-style-fansybox="image-style" data-fancybox="photo-user"
                     data-src="<?=$image->getUrl()?>" data-caption="<?=Yii::$app->formatter->asDate($model->date,'medium')?>">
                    <img src="<?=$image->getUrl('260x330')?>" alt="you-photo">
                </div>
        <? } else{ ?>
            <div class="img-box">
                <a href="<?=\yii\helpers\Url::to(['my-progress/add-photo','date'=>$model->date])?>" class="btn add-info">Upload Front</a>
            </div>
        <? } ?>
        <?
        $image=$model->getImage(\backend\modules\progress\models\Progress::$imageTypes[1]);
        if($image->id){
        ?>
            <div class="img-box" data-style-fansybox="image-style" data-fancybox="photo-user"
                 data-src="<?=$image->getUrl()?>" data-caption="<?=Yii::$app->formatter->asDate($model->date,'medium')?>">
                <img src="<?=$image->getUrl('260x330')?>" alt="you-photo">
            </div>
        <? }else{ ?>
            <div class="img-box">
            <a href="<?=\yii\helpers\Url::to(['my-progress/add-photo','date'=>$model->date])?>" class="btn add-info">Upload Side</a>
            </div>
        <? }  ?>
        <?
        $image=$model->getImage(\backend\modules\progress\models\Progress::$imageTypes[2]);
        if($image->id){
        ?>
            <div class="img-box" data-style-fansybox="image-style" data-fancybox="photo-user"
                 data-src="<?=$image->getUrl()?>" data-caption="<?=Yii::$app->formatter->asDate($model->date,'medium')?>">
                <img src="<?=$image->getUrl('260x330')?>" alt="you-photo">
            </div>
        <? }else{ ?>
            <div class="img-box">
                <a href="<?=\yii\helpers\Url::to(['my-progress/add-photo','date'=>$model->date])?>" class="btn add-info">Upload Back</a>
            </div>
        <? } ?>
    </div>
