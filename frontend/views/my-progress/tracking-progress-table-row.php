<?php


?>


    <td data-label="Date">
        <a class="text-data"><?=Yii::$app->formatter->asDate($model->date,'medium')?></a>
    </td>

    <td data-label="Weight">
        <? if($model->weight){ ?>
            <a class="text-value" href="#" onclick="getWeightByDate('<?=$model->formatedDate?>',true); return false;" data-modal="weight">
                <span><?=$model->weight?></span>
                <span class="text">lbs</span>
            </a>
        <? }else{ ?>
            <a class="text-value" href="#" onclick="getWeightByDate('<?=$model->formatedDate?>',true); return false;" data-modal="body-fat">
                <span>Add</span>
            </a>
        <? } ?>
    </td>

    <td data-label="Fat">
        <? if($model->fat){ ?>
            <a class="text-value" href="#" onclick="getFatByDate('<?=$model->formatedDate?>',true); return false;" data-modal="body-fat">
                <span><?=$model->fat?></span>
                <span class="text">%</span>
            </a>
        <? }else{ ?>
            <a class="text-value" href="#" onclick="getFatByDate('<?=$model->formatedDate?>',true); return false;" data-modal="body-fat">
                <span>Add</span>
            </a>
        <? } ?>
    </td>

    <td data-label="Front">
        <?
            $image=$model->getImage(\backend\modules\progress\models\Progress::$imageTypes[0]);
            if($image->id){
        ?>
            <div class="img-box" data-style-fansybox="image-style" data-fancybox="photo-user-table"
                 data-src="<?=$image->getUrl()?>" data-caption="<?=Yii::$app->formatter->asDate($model->date,'medium')?>">
                <img src="<?=$image->getUrl('65x80')?>" alt="you-photo">
            </div>
        <? } else{ ?>
            <a class="text-value" href="<?=\yii\helpers\Url::to(['my-progress/add-photo','date'=>$model->date])?>">
                <span>Upload</span>
            </a>
        <? } ?>
    </td>

    <td data-label="Back">
        <?
            $image=$model->getImage(\backend\modules\progress\models\Progress::$imageTypes[1]);
            if($image->id){
        ?>
            <div class="img-box" data-style-fansybox="image-style" data-fancybox="photo-user-table"
                 data-src="<?=$image->getUrl()?>" data-caption="<?=Yii::$app->formatter->asDate($model->date,'medium')?>">
                <img src="<?=$image->getUrl('65x80')?>" alt="you-photo">
            </div>
        <? } else{ ?>
            <a class="text-value" href="<?=\yii\helpers\Url::to(['my-progress/add-photo','date'=>$model->date])?>">
                <span>Upload</span>
            </a>
        <? } ?>
    </td>

    <td data-label="Side">
        <?
            $image=$model->getImage(\backend\modules\progress\models\Progress::$imageTypes[2]);
            if($image->id){
        ?>
            <div class="img-box" data-style-fansybox="image-style" data-fancybox="photo-user-table"
                 data-src="<?=$image->getUrl()?>" data-caption="<?=Yii::$app->formatter->asDate($model->date,'medium')?>">
                <img src="<?=$image->getUrl('65x80')?>" alt="you-photo">
            </div>
        <? } else{ ?>
            <a class="text-value" href="<?=\yii\helpers\Url::to(['my-progress/add-photo','date'=>$model->date])?>">
                <span>Upload</span>
            </a>
        <? } ?>
    </td>
</tr>
<tr class="indent">
    <td colspan="5"></td>
