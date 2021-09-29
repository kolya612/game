<?php if(!empty($model->sale_price)){ ?>
    <div class="tile__price-value">$<?=number_format($model->sale_price,2 ,'.', '')?></div>
    <div class="tile__price-old">$<?=number_format($model->price,2 ,'.', '')?></div>
    <div class="tile__price-safety"><?=$model->percent?>% OFF</div>
<?php } else { ?>
    <div class="tile__price-value">$<?=number_format($model->price,2 ,'.', '')?></div>
<?php } ?>