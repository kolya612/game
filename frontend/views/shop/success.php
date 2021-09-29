<?php

use common\models\Data;

$bundle=\frontend\assets\AppAsset::register($this);
?>
<section class="checkout physical order-confirm">

    <h1 class="checkout__title">Order Confirmation</h1>

    <div class="order-confirm__title-wrapper">
        <img class="check-icon" src="<?=$bundle->baseUrl?>/assets/check.svg" alt="check">
        <p class="number-order">Order #<?=$order->getOrderIdString()?> Confirmed</p>
        <h2 class="order-confirm__title">Your payment has been processed.</h2>
    </div>

    <div class="checkout-order">
        <h3 class="title-sm">Order Summary</h3>

        <?php foreach($order->getOrderItems()->all() as $item){ ?>
            <div class="checkout-order__product content-box">
                <div class="img-box physical-product">
                    <img src="<?=$item->product->image->getUrl()?>" alt="product">
                </div>
                <div class="product-info">
                    <div class="title-group">
                        <p class="title"><?=$item->title?></p>
                    </div>
                    <?php
                        if(!empty($item->phase)){
                            $color = $item->phase == 2?'green':'';
                            echo "<span class='categories_tag " . $color  . "'>Phase $item->phase</span>";
                        }
                    ?>
                    <?php if($item->type == 'supplement'){ ?><p class="text quantity">Quantity <strong><?php echo $item->quantity ?></strong></p><?php } ?>
                    <div class="price-group">
                        <?php if(!empty($item->old_price)){ ?>
                            <span class="text">Unit Price <strong><?=Data::preparePrice($item->price)?></strong></span>
                            <span class="text old-price"><?=Data::preparePrice($item->old_price)?></span>
                            <span class="text sail"><?=$item->percent?>% OFF</span>
                        <?php } else { ?>
                            <span class="text">Unit Price <strong><?=Data::preparePrice($item->price)?></strong></span>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php } ?>


        <div class="checkout-order__price content-box">
            <ul>
                <li class="price__elem">
                    <span class="text grey">Regular Price</span>
                    <span class="text price grey"><?=Data::preparePrice($order->getOrderTotalRegularPrice())?></span>
                </li>
                <li class="price__elem">
                    <span class="text green discount">Discounted Price</span>
                    <span class="text price green"><?=Data::preparePrice($order->getTotalDiscountedPrice())?></span>
                </li>
                <li class="price__elem">
                    <span class="text">Shipping & Handling</span>
                    <span class="text price">$0.00</span>
                </li>
                <li class="price__elem">
                    <span class="text">Tax</span>
                    <span class="text price">$0.00</span>
                </li>
            </ul>
        </div>
        <div class="total-price">
            <span>TOTAL</span>
            <span><?=Data::preparePrice($order->total)?></span>
        </div>
    </div>

    <div class="order-confirm__information">
        <!-- TODO -->
        <div class="content-box">
            <h3 class="title-sm">Delivery Info</h3>
            <div class="info">
                <p class="name">Shipment Date</p>
                <p class="data">Monday, April 26, 2021</p>
            </div>
        </div>

        <?php
            if(!empty($order->shipping_first_name)){
        ?>
            <div class="content-box">
                <h3 class="title-sm">Shipping Information</h3>
                <div class="info">
                    <p class="name">Name</p>
                    <p class="data"><?=$order->shipping_first_name?> <?=$order->shipping_last_name?></p>
                </div>
                <div class="info">
                    <p class="name">Address</p>
                    <p class="data"><?=$order->shipping_address?>,  <?=$order->shipping_city?>,  <?=$order->shipping_zip?></p>
                </div>
                <?php if($order->shipping_address1) { ?>
                <div class="info">
                    <p class="name">Address 2</p>
                    <p class="data"><?=$order->shipping_address1?>,  <?=$order->shipping_city?>,  <?=$order->shipping_zip?></p>
                </div>
                <?php } ?>
                <div class="info">
                    <p class="name">Phone</p>
                    <p class="data"><?=$order->phone?></p>
                </div>
            </div>
        <?php } ?>

        <div class="content-box">
            <h3 class="title-sm">Payment Info</h3>
            <div class="info">
                <p class="name">Card</p>
                <p class="data"><span id="title-cart-type">Visa</span> <?=$order->getCardEnding()?></p>
            </div>
            <div class="info">
                <p class="name">Expiration Date</p>
                <p class="data"><?=$order->expiration_month?>/<?=$order->expiration_year?></p>
            </div>
        </div>
        <?php
            $this->registerJs("var card_number = '$order->card_number';
                               var creditcard = new CreditCard();
                               var type = creditcard.getCreditCardNameByNumber(card_number);
    
                               if (type == 'Visa') {
                                    $('#title-cart-type').html('Visa');
                               } else if (type == 'Mastercard') {
                                    $('#title-cart-type').html('Mastercard');
                               } else if (type == 'Discover') {
                                    $('#title-cart-type').html('Discover');
                               } else if (type == 'Amex') {
                                    $('#title-cart-type').html('Amex');
                               }
            ", \yii\web\View::POS_END);
        ?>
        <div class="content-box">
            <h3 class="title-sm">Billing Address</h3>
            <div class="info">
                <p class="name">Name</p>
                <p class="data"><?=$order->first_name?> <?=$order->last_name?></p>
            </div>
            <div class="info">
                <p class="name">Address</p>
                <p class="data"><?=$order->address?>,  <?=$order->city?>,  <?=$order->zip?></p>
            </div>
            <?php if($order->address1) { ?>
                <div class="info">
                    <p class="name">Address 2</p>
                    <p class="data"><?=$order->address1?>,  <?=$order->city?>,  <?=$order->zip?></p>
                </div>
            <?php } ?>
        </div>

        <div class="order-label__success">
            <div class="img-box">
                <img src="<?=$bundle->baseUrl?>/assets/car-green.svg" alt="car-green">
            </div>
            <p class="text">Your estimated Delivery Date is <strong>Thu Mar 05 - Tue Mar 10.</strong> When your order
                ships, you will receive a ‘Shipment Notification’ email. If you have any questions or need further
                information about returns, you can view our Return Policy.</p>
        </div>
    </div>
</section>
