<?php

use common\models\Data;

foreach ($model->orderItems as $item){
?>
        <div class="order-card card-style">
            <div class="img-box">
                <img src="<?=$item->product->image->getUrl()?>" alt=""/>
            </div>
            <div class="info-box">
                <p class="info-box__title">Purchase Date <?=$model->formatDateCreate()?></p>
                <p class="info-box__text">Price <strong><?=Data::preparePrice($model->total)?></strong></p>
                <a class="info-box__link" href="<?=\yii\helpers\Url::to(['shop/invoice','order_id'=>$model->id])?>">Download Invoice</a>
            </div>
        </div>
<?php
    break;
    }
?>