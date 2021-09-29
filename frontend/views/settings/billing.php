<?php
$bundle=\frontend\assets\AppAsset::register($this);
?>
<section class="my-account">
    <a class="drop-btn" id="account-menu-drop-btn" href="#">My Profile</a>

    <div class="container">
        <div class="row">

            <?=$this->render('../elements/setting-menu',['active'=>'billing'])?>

            <div class="col-12 col-lg-9">
                <div class="tab-content" id="pills-tabContent">

                    <div class="billing pp tab-pane fade show active"" id="billing" role="tabpanel"
                         aria-labelledby="pills-profile-tab">

                        <div class="my-account__content-wrapper">

                            <div class="payment-methods block-show">
                                <h1 class="my-account__title">Billing</h1>

                                <h3 class="title-sm">Payment Methods</h3>
                                <a class="payment-methods__link link-primary" data-biling="add-new__payment-methods"
                                   href="#">
                                    Add New Payment Method
                                </a>

                                <?php
                                    $billings = \frontend\models\Billings::getBillings();
                                    foreach ($billings as $billing) {
                                    ?>
                                        <div class="payment-methods__card card-style">
                                            <?php
                                                $this->registerJs("var value$billing->id = '$billing->card_number';
                                                           var creditcard$billing->id = new CreditCard();
                                                           var type$billing->id = creditcard$billing->id.getCreditCardNameByNumber(value$billing->id);

                                                           if (type$billing->id == 'Visa') {
                                                                $('#title-cart-type-$billing->id').html('Visa');
                                                                $('#picture-cart-type-$billing->id').html('<source srcset=\"$bundle->baseUrl/assets/visa-logo.svg\" type=\"image/webp\"><img class=\"card__logo\" src=\"$bundle->baseUrl/assets/visa-logo.svg\" alt=\"visa\" width=\"60px\">');
                                                           } else if (type$billing->id == 'Mastercard') {
                                                                $('#title-cart-type-$billing->id').html('Mastercard');
                                                                $('#picture-cart-type-$billing->id').html('<source srcset=\"$bundle->baseUrl/assets/mastercard-logo.svg\" type=\"image/webp\"><img class=\"card__logo\" src=\"$bundle->baseUrl/assets/mastercard-logo.svg\" alt=\"Mastercard\" width=\"60px\">');
                                                           } else if (type$billing->id == 'Discover') {
                                                                $('#title-cart-type-$billing->id').html('Discover');
                                                                $('#picture-cart-type-$billing->id').html('<source srcset=\"$bundle->baseUrl/assets/discover-logo.svg\" type=\"image/webp\"><img class=\"card__logo\" src=\"$bundle->baseUrl/assets/discover-logo.svg\" alt=\"Discover\" width=\"60px\">');
                                                           } else if (type$billing->id == 'Amex') {
                                                                $('#title-cart-type-$billing->id').html('Amex');
                                                                $('#picture-cart-type-$billing->id').html('<source srcset=\"$bundle->baseUrl/assets/amex-logo.svg\" type=\"image/webp\"><img class=\"card__logo\" src=\"$bundle->baseUrl/assets/amex-logo.svg\" alt=\"Amex\" width=\"60px\">');
                                                           }
                                                ", \yii\web\View::POS_END);
                                            ?>
                                            <picture id="picture-cart-type-<?=$billing->id?>"><source srcset="<?=$bundle->baseUrl?>/assets/visa-logo.svg" type="image/webp"><img class="card__logo" src="<?=$bundle->baseUrl?>/assets/visa-logo.svg" alt="visa"></picture>
                                            <div class="card__info">
                                                <span class="text"><strong id="title-cart-type-<?=$billing->id?>">Visa</strong></span>
                                                <span class="text">Card Ending in <strong><?=\common\models\Data::MONTH[$billing->expiration_month]?>.20<?=$billing->expiration_year?></strong></span>
                                                <span class="text">Expiration Date <strong><?=$billing->expiration_month>9?$billing->expiration_month:'0'.$billing->expiration_month?> / <?=$billing->expiration_year?></strong></span>
                                            </div>
                                            <a href="<?=\yii\helpers\Url::to(['settings/billing-edit','billing_id'=>$billing->id])?>" class="edit__payment-methods">
                                                <picture><source srcset="<?=$bundle->baseUrl?>/assets/pen.svg" type="image/webp"><img class="card__edit" src="<?=$bundle->baseUrl?>/assets/pen.svg" alt="edit"></picture>
                                            </a>
                                        </div>
                                    <?php
                                    }
                                ?>
                            </div>

                            <div class="add-payment-method block-hidden">
                                <div class="title-wrapper my-account__title">
                                    <h1 class="my-account__title mb-0">Billing</h1>
                                    <a class="return-link link-primary cancel-add-payment" href="<?=\yii\helpers\Url::to(['settings/billing'])?>">Сancel</a>
                                </div>
                                <?=$this->render('billing-form',['bundle'=>$bundle, 'formModel'=>$formModel, 'title'=>'Add New Payment Method'])?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
