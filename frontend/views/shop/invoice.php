<?php

use common\models\Data;

$bundle=\frontend\assets\AppAsset::register($this);
?>

<img src="<?=file_get_contents(__DIR__.'/Limitless_Keto_Chargeback_2.base')?>">
<div style="margin-bottom: 10px"></div>
<table width="100%" style="vertical-align: top; font-size: 12px; font-family: 'Menlo'; line-height: 25px;">
    <tr>
        <td style="vertical-align: top; width: 33%; text-align: left; padding-left: 15px; line-height: 25px;">
            Emblaze One Inc<br>
            9454 Wilshire Blvd., Ste 300<br>
            Beverly Hills, CA 90212<br>
            -<br>
            Email: info@limitlessx.com<br>
        </td>
        <td width="33%" style="vertical-align: top; text-align: center; padding-right: 15px;">
            <img width="200px" src="<?=file_get_contents(__DIR__.'/Limitless_Keto_Chargeback_1.base')?>">
        </td>
        <td style="width: 33%;"></td>
    </tr>
</table>
<div style="height: 1px; "></div>
<table width="100%" style="vertical-align: top; font-family: 'Menlo'; line-height: 14px;">
    <tr>
        <td colspan="2" style="text-align: right; padding-right: 15px; font-size: 21px; line-height: 14px; vertical-align: top;">
            INVOICE
        </td>
    </tr>
</table>
<table width="100%" style="vertical-align: top; font-family: 'Menlo'; font-size: 12px;">
    <tr>
        <td style="padding-left: 15px; width: 100px; line-height: 25px; vertical-align: top">
            Bill
            To:
            <br><br><br><br><br><br>
            <?php if ($order->shipping_first_name) { ?>
                Ship
                To:
            <?php } ?>
        </td>
        <td style="line-height: 25px; vertical-align: top; text-align: left; ">
            <?=$order->first_name?> <?=$order->last_name?><br>
            <?=$order->address?> <?=$order->address1?><br/>
            <?=$order->city?> <?=$order->getState()?> <?=$order->zip?><br>
            <?php if($order->email){ ?>Email: <?=$order->email?><br><?php } ?>
            <?php if($order->phone){ ?>Tel: <?=$order->phone?><br><?php } ?>
            <br/>


            <?php if ($order->shipping_first_name) { ?>
                <?=$order->shipping_first_name?> <?=$order->shipping_last_name?><br>
                <?=$order->shipping_address?> <?=$order->shipping_address1?><br/>
                <?=$order->shipping_city?> <?=$order->getShippingState()?> <?=$order->shipping_zip?><br/>
                Email: <?=$order->email?><br>
                Tel: <?=$order->phone?>
            <?php } ?>

        </td>
        <td style="vertical-align: top; padding-right: 15px;">
            <table width="100%" style="vertical-align: top; font-family: 'Menlo'; line-height: 14px;">
                <tr>
                    <td style="line-height: 25px; vertical-align: top;">
                        Invoice No:<br>
                        Date:
                    </td>
                    <td style="text-align: right; line-height: 25px; vertical-align: top;">
                        <?=$order->getOrderIdString()?><br>
                        <?=Yii::$app->formatter->asDate($order->created_at, 'php:m/d/Y')?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table width="100%" style="margin-bottom: 30px; font-family: 'Menlo'; ">
    <tr style="">
        <td style="padding-left: 15px; border-bottom: solid 3px #e4e4e4; font-size: 12px">ID</td>
        <td style="padding-left: 15px; border-bottom: solid 3px #e4e4e4; font-size: 12px">Type</td>
        <td style="border-bottom: solid 3px #e4e4e4; font-size: 12px">Items</td>
        <td style=" text-align: center; border-bottom: solid 3px #e4e4e4; font-size: 12px">Quantity</td>
        <td style=" text-align: center; border-bottom: solid 3px #e4e4e4; font-size: 12px">Price</td>
        <td style=" text-align: center; border-bottom: solid 3px #e4e4e4; font-size: 12px">Amount</td>
    </tr>
    <?php foreach ($order->orderItems as $item){ ?>
        <tr style="">
            <td style="padding-left: 15px;  border-bottom: solid 2px white; font-size: 12px; line-height: 12px;"><?=$item->item_id?></td>
            <td style="padding-left: 15px;  border-bottom: solid 2px white; font-size: 12px; line-height: 12px;"><?=$item->type?></td>
            <td style=" border-bottom: solid 2px white; font-size: 12px; line-height: 12px;"><?=$item->title?></td>
            <td style="text-align: center;  border-bottom: solid 2px white; font-size: 12px; line-height: 12px"><?=$item->quantity?></td>
            <td style="text-align: center;  border-bottom: solid 2px white; font-size: 12px; line-height: 12px"><?=number_format($item->price,2,'.', ' ')?></td>
            <td style="text-align: center;  border-bottom: solid 2px white; font-size: 12px; line-height: 12px"><?=number_format($item->price * $item->quantity,2,'.', ' ')?></td>
        </tr>
    <? } ?>
</table>

<table width="100%" style="font-family: 'Menlo';line-height: 25px; vertical-align: top; padding-left: 15px;">
    <tr>
        <td width="45%" style="padding: 15px; ">

            <strong>Invoice Paid:</strong><br>
            Card Number: <?=$order->getCardEnding()?><br>
            <!--
            AUTH#: <?=$transaction->txn_id?><br>
            IP: <?=$transaction->ip?><br>
            <? if($transaction->case_id){ ?>Case ID: <?=$transaction->case_id?><? } ?>
            -->
        </td>
        <?php
        $discount = $order->getTotalDiscountedPrice();
        ?>
        <td width="50%" style="line-height: 25px; padding: 15px; vertical-align: top">
            <table width="100%" style="text-align: right; line-height: 25px; vertical-align: top">
                <tr>
                    <td style="line-height: 25px; vertical-align: top">
                        Subtotal<br>
                        <? if($discount){ ?>Discount<br><? } ?>
                        Tax:<br>
                        Shipping:<br>
                        Total:
                    </td>
                    <td style="padding-right: 25px; line-height: 25px; vertical-align: top">
                        $<?=number_format($order->getOrderTotalRegularPrice(),2,'.', ' ')?><br>
                        $<?=number_format($discount,2,'.', ' ')?><br>
                        $0.00<br>
                        $0.00<br>
                        $<?=number_format($order->total,2,'.', ' ')?>
                    </td>
                </tr>
                <tr style=" font-size: 18px; border-top: solid 3px #000; border-bottom: solid 3px #000">
                    <td style="border-top: solid 3px #e4e4e4; font-size: 21px; color: #97853d; border-bottom: solid 3px #e4e4e4"><strong style="">Grand Total:</strong></td>
                    <td style="padding-right: 25px; color:#97853d; border-top: solid 3px #e4e4e4; border-bottom: solid 3px #e4e4e4; font-size: 21px;"><strong>$<?=number_format($order->total,2,'.', ' ')?></strong></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
