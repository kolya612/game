<?php
    $model=Yii::$app->user->identity->getRecomendedSupplements()->orderBy('RAND()')->one();
    if(!$model) return false;

    $bundle=\frontend\assets\AppAsset::register($this);
?>


<div class="you_product mb-2">
    <h3 class="title">
        <img src="<?=$bundle->baseUrl?>/assets/XMLID.svg" alt=""/>
        Your Products
    </h3>
    <a href="<?=\yii\helpers\Url::to(['shop/index'])?>">View All</a>
</div>
<a href="<?=\yii\helpers\Url::to(['shop/view','id'=>$model->id])?>">
    <div class="block_product_dash">
            <img src="<?=$model->image->getUrl('140')?>" alt=""/>
            <div class="block_product_dash__content">
                <span class="categories"><?=$model->title?></span>
                <p>
                    <?=$model->short_text?>
                </p>
                <div class="d-flex align-items-center">
                    <?=$this->render('supplement-item-price',['model'=>$model])?>
                </div>
            </div>
    </div>
</a>
