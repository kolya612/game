<?php
use common\models\Data;

$bundle=\frontend\assets\AppAsset::register($this);
?>
<h3 class="title-sm">Order Summary</h3>
<?php foreach ($cart->getPositions() as $position_id => $item){ ?>
    <div class="checkout-order__product content-box">
        <div class="img-box physical-product">
            <picture><source srcset="<?=$item->image->getUrl()?>" type="image/webp"><img src="<?=$item->image->getUrl()?>" alt="product"></picture>
        </div>
        <div class="product-info">
            <div class="title-group">
                <p class="title"><?=$item->title?>!!!</p>
                <a href="<?=\yii\helpers\Url::to(['shop/delete-from-cart','position_id'=>$position_id])?>"><picture><source srcset="<?=$bundle->baseUrl?>/assets/exit.svg" type="image/webp"><img class="order-product-close" src="<?=$bundle->baseUrl?>/assets/exit.svg" alt="close"></picture></a>
            </div>
            <?php
                if(!empty($item->phase)){
                    $color = $item->phase == 2?'green':'';
                    echo "<span class='categories_tag " . $color  . "'>Phase $item->phase</span>";
                }
            ?>

            <?php if($item::TYPE == 'supplement'){ ?>
                <p class="text quantity">Quantity <strong><?php echo $item->getQuantity() ?></strong></p>
            <?php } ?>

            <div class="price-group">
                <?php if(!empty($item->sale_price)){ ?>
                    <div class="text"><?=Data::preparePrice($item->sale_price)?></div>
                    <div class="text old-price"><?=Data::preparePrice($item->price)?></div>
                    <div class="text sail"><?=$item->percent?>% OFF</div>
                <?php } else { ?>
                    <div class="text"><?=Data::preparePrice($item->price)?></div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
