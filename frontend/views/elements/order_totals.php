<?php
use common\models\Data;
?>
<div class="checkout-order__price content-box">
    <ul>
        <li class="price__elem">
            <span class="text grey">Regular Price</span>
            <span class="text price grey"><?=Data::preparePrice($cart->getTotalRegularPrice())?></span>
        </li>
        <li class="price__elem">
            <span class="text green discount">Discounted Price</span>
            <span class="text price green"><?=Data::preparePrice($cart->getTotalDiscountedPrice())?></span>
        </li>
        <li class="price__elem">
            <span class="text">Shipping & Handling</span>
            <span class="text price"><?=Data::preparePrice(0)?></span>
        </li>
        <li class="price__elem">
            <span class="text">Tax</span>
            <span class="text price"><?=Data::preparePrice(0)?></span>
        </li>
    </ul>
</div>
<div class="total-price">
    <span>TOTAL</span>
    <span><?=Data::preparePrice($cart->getTotalPrice())?></span>
</div>