<?php

?>
<a href="<?=\yii\helpers\Url::to(['shop/view','id'=>$model->id])?>">
    <div class="block_supplements">
        <div class="for_img">
            <img src="<?=$model->image->getUrl()?>" alt=""/>
        </div>
        <div>
            <? foreach ($model->supcategories as $category){ ?>
                <span class="categories"><?=$category->title?></span>
            <? } ?>
            <p>
                <?=$model->short_text?>
            </p>
            <div class="d-flex align-items-center flex-wrap">
                <?=$this->render('../elements/supplement-item-price',['model' => $model]);?>
            </div>
        </div>
    </div>
</a>
