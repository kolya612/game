<?php

use common\models\Data;
use vendor\wbp\multipleCountrySelector\CountryStateHelper;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$bundle = \frontend\assets\AppAsset::register($this);
$form = ActiveForm::begin(['id' => 'add-edit-form']);
$shippable = $cart->getShippableStatus();
$link_to_term = \yii\helpers\Url::to(['guide/terms-and-conditions']);
?>

<?php if (Yii::$app->session->hasFlash('error-payment')) { ?>
        <div id="for_error_payment"><div class="alert alert-danger text-center"><span class="text">Payment failed</span></div></div>
        <?php
        $this->registerJs("setTimeout(function(){ $('#for_error_payment').html('');},2500);", \yii\web\View::POS_END);
    } ?>


<section class="checkout">
    <div class="container">
        <h1 class="checkout__title">Secure Checkout</h1>

        <div class="row d-flex flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-6 del-sm-pd">
                <div class="checkout-info__top">

                    <!-- Shipping -->
                    <?php if ($shippable === true) { ?>
                        <?= $form->field($formModel, 'shippable')
                            ->hiddenInput(['value' => 1])
                            ->label(false)
                        ?>
                        <div class="checkout-section">
                            <div class="checkout-info__title">
                                <h3 class="title-sm">Enter Shipping Information</h3>
                                <hr>
                            </div>
                            <?= $form->field($formModel, 'email')->textInput(['maxlength' => true, 'class' => 'form-control', 'id' => 'Email', 'value' => Yii::$app->user->getIdentity()->email]) ?>
                            <?= $form->field($formModel, 'phone')->textInput(['maxlength' => true, 'class' => 'form-control', 'id' => 'Phone']) ?>
                            <div class="form-row">
                                <div class="col-6">
                                    <?= $form->field($formModel, 'shipping_first_name')->textInput(['maxlength' => true, 'class' => 'form-control', 'value' => Yii::$app->user->getIdentity()->first_name]) ?>
                                </div>
                                <div class="col-6">
                                    <?= $form->field($formModel, 'shipping_last_name')->textInput(['maxlength' => true, 'class' => 'form-control', 'value' => Yii::$app->user->getIdentity()->last_name]) ?>
                                </div>
                            </div>
                            <?= $form->field($formModel, 'shipping_country')->dropDownList(CountryStateHelper::getCountries(), ['class' => 'form-control', 'id' => 'shipping-country']) ?>

                            <?php
                            $this->registerJs("
                                $('#shipping-country').on('change', function (e) {
                                    $.ajax({
                                        url:'" . Url::to(['settings/get-states']) . "',
                                        data:{
                                            'country_id':$('#shipping-country').val(),
                                        },
                                        type:'GET',
                                        dataType: 'json', 
                                        success:function(items){
                                            $('#shipping-state > option').remove();
                                            for (const [key, value] of Object.entries(items)) {
                                                var option=$('<option>');
                                                option.text(value);
                                                option.val(key);
                                                if($('#shipping-state').data('selected')==key){
                                                    option.attr('selected','selected');
                                                }
                                                $('#shipping-state').append(option);
                                            }
                                        }
                                    })
                                }).change();
                            ", \yii\web\View::POS_END);
                            ?>
                            <?= $form->field($formModel, 'shipping_address')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>

                            <a class="link-primary font-weight-bold add_line_2" id="open-address-billing-1" href="#">
                                <picture>
                                    <source srcset="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" type="image/webp">
                                    <img class="icon-plus-bold" src="<?= $bundle->baseUrl ?>/assets/plus-blue.svg"
                                         alt="blue-plus"></picture>
                                Add Line 2
                            </a>
                            <div class="form-group block-hidden" id="address-billing-1">
                                <label class="" for="street-address">Address 2</label>
                                <?= $form->field($formModel, 'shipping_address1', [
                                    'template' => '{input}',
                                    'options' => ['class' => ''],
                                ])
                                    ->textInput(['maxlength' => true, 'class' => 'form-control mb-1', 'placeholder' => 'Address 2'])
                                    ->label(false)
                                ?>
                            </div>
                            <?php
                            $this->registerJs("
                                $('#open-address-billing-1').on('click', function (e) {
                                    e.preventDefault();
                                    $('#address-billing-1').removeClass('block-hidden');
                                    $('#address-billing-1').addClass('block-show');
                                    $(this).addClass('block-hidden');
                                });
                            ", \yii\web\View::POS_END);
                            ?>
                            <?= $form->field($formModel, 'shipping_city')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                            <div class="form-row">
                                <div class="col-8">
                                    <?php $state = ['State']; ?>
                                    <?= $form->field($formModel, 'shipping_state')->dropDownList($state, ['data-selected' => $formModel->shipping_state, 'class' => 'form-control', 'id' => 'shipping-state']) ?>
                                </div>
                                <div class="col-4">
                                    <?= $form->field($formModel, 'shipping_zip')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                                </div>
                            </div>
                            <div class="order-label">
                                <div class="img-box">
                                    <picture>
                                        <source srcset="<?= $bundle->baseUrl ?>/assets/USPS.svg" type="image/webp">
                                        <img src="<?= $bundle->baseUrl ?>/assets/USPS.svg" alt="USPS"></picture>
                                </div>
                                <div class="text-box">
                                    <p class="text">Your order is estimated to ship by</p>
                                    <?php
                                    $date = new DateTime(date("Y-m-d"));
                                    $date->add(new DateInterval('P3D'));
                                    ?>
                                    <p class="text font-weight-bold"><?= $date->format('l, F d, Y') ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                        echo $form->field($formModel, 'shippable')
                            ->hiddenInput(['value' => 0])
                            ->label(false);
                    } ?>

                    <!-- Payment -->
                    <?php
                    $billings = \frontend\models\Billings::getBillingsMass();
                    if ($billings) {
                        $show = true;
                        if (isset($formModel->billing)) {
                            $show = true;
                            if (!$formModel->billing) {
                                $show = false;
                            }
                        } else {
                            $show = true;
                        }
                        ?>
                        <div class="checkout-section <?= $show ? 'block-show' : 'block-hidden' ?>" id="selected-card">
                            <div class="checkout-info__title">
                                <h3 class="title-sm">Enter Payment Information</h3>
                                <hr>
                            </div>
                            <?= $form->field($formModel, 'billing_id')->dropDownList(\frontend\models\Billings::getBillingsMass(), ['class' => 'form-control', 'id' => 'card_number']) ?>
                            <div class="form-row">
                                <div class="col-6">
                                    <?= $form->field($formModel, 'cvv')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                                </div>
                            </div>
                            <?= $form->field($formModel, 'billing')
                                ->hiddenInput(['value' => 1])
                                ->label(false)
                            ?>
                            <a class="link-primary font-weight-bold" id="open-new-card" href="#">
                                <picture>
                                    <source srcset="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" type="image/webp">
                                    <img class="icon-plus-bold" src="<?= $bundle->baseUrl ?>/assets/plus-blue.svg"
                                         alt="blue-plus"></picture>
                                </picture>
                                Add a different payment method
                            </a>
                        </div>
                    <?php } else { ?>
                        <?= $form->field($formModel, 'billing')
                            ->hiddenInput(['value' => 0])
                            ->label(false)
                        ?>
                    <?php } ?>

                    <?php
                    $this->registerJs("
                                $('#open-new-card').on('click', function (e) {
                                    e.preventDefault();
                                    $('#orders-billing').val('0');
                                    $('#new-card').removeClass('block-hidden');
                                    $('#new-card').addClass('block-show');
                                    $('#selected-card').removeClass('block-show');
                                    $('#selected-card').addClass('block-hidden');
                                });
                        ", \yii\web\View::POS_END);
                    ?>
                    <?php
                    $hidden = true;
                    if (isset($formModel->billing)) {
                        $hidden = true;
                        if (!$formModel->billing) {
                            $hidden = false;
                        }
                    } else {
                        $hidden = true;
                    }
                    ?>
                    <div class="checkout-section <?= $hidden ? 'block-hidden' : 'block-show' ?>" id="new-card">
                        <div class="checkout-info__title">
                            <h3 class="title-sm">Enter Payment Information</h3>
                            <hr>
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <?= $form->field($formModel, 'first_name')->textInput(['maxlength' => true, 'class' => 'form-control', 'value' => Yii::$app->user->getIdentity()->first_name]) ?>
                            </div>
                            <div class="col-6">
                                <?= $form->field($formModel, 'last_name')->textInput(['maxlength' => true, 'class' => 'form-control', 'value' => Yii::$app->user->getIdentity()->last_name]) ?>
                            </div>
                        </div>
                        <?= $form->field($formModel, 'card_number')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                        <div class="form-row">
                            <div class="col-6">
                                <?= $form->field($formModel, 'cvv2')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                            </div>
                            <div class="col-6">
                                <?php
                                $this->registerJs("
                                        var element = document.getElementById('orders-expiration_date');
                                        var maskOptions = {
                                          mask: '00/00'
                                        };
                                        var mask = IMask(element, maskOptions);
                                    ", \yii\web\View::POS_END);
                                ?>
                                <?= $form->field($formModel, 'expiration_date')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                            </div>
                        </div>
                        <?php if ($shippable === true) { ?>
                            <div class="form-check">
                                <label for="defaultCheck3" class="checkbox path">
                                    <input id="defaultCheck3" name="Orders[address_the_same]" type="checkbox"
                                           checked="checked" value="1">
                                    <svg viewBox="0 0 21 21">
                                        <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                                    </svg>
                                    <span class="input-text">Billing and shipping address are the same</span>
                                </label>
                            </div>

                        <?php } else { ?>
                            <input id="defaultCheck3" name="Orders[address_the_same]" type="checkbox" checked="checked"
                                   value="0" style="display: none;">
                        <?php } ?>

                        <?php
                        $this->registerJs("
                                $('#defaultCheck3').on('change', function (e) {
                                    e.preventDefault();
                                    
                                    let val = $('#defaultCheck3:checked').val()
                                    if (val == 1) {
                                        $('#billing-address-fields').removeClass('block-show');
                                        $('#billing-address-fields').addClass('block-hidden');
                                    } else {
                                        $('#billing-address-fields').removeClass('block-hidden');
                                        $('#billing-address-fields').addClass('block-show');
                                    }
                                });
                        ", \yii\web\View::POS_END);
                        ?>

                        <div class="checkout-section billing-address
                            <?php if ($shippable === true) {
                            echo 'block-hidden';
                        } else {
                            echo 'block-show';
                        } ?>
                        " id="billing-address-fields">
                            <h3 class="title-sm">Billing Address</h3>
                            <?= $form->field($formModel, 'country')->dropDownList(CountryStateHelper::getCountries(), ['class' => 'form-control', 'id' => 'payment_country']) ?>
                            <?php
                            $this->registerJs("
                                    $('#payment_country').on('change', function (e) {
                                        $.ajax({
                                            url:'" . Url::to(['settings/get-states']) . "',
                                            data:{
                                                'country_id':$('#payment_country').val(),
                                            },
                                            type:'GET',
                                            dataType: 'json', 
                                            success:function(items){
                                                $('#payment-state > option').remove();
                                                for (const [key, value] of Object.entries(items)) {
                                                    var option=$('<option>');
                                                    option.text(value);
                                                    option.val(key);
                                                    
                                                    if($('#payment-state').data('selected')==key){
                                                        option.attr('selected','selected');
                                                    }
                                                    $('#payment-state').append(option);
//                                                    $('#payment-state').append($('<option>', {
//                                                        value: key,
//                                                        text : value
//                                                    }));
                                                }
                                            }
                                        })
                                    }).change();
                                ", \yii\web\View::POS_END);
                            ?>
                            <?= $form->field($formModel, 'address')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                            <a class="link-primary font-weight-bold add_line_2" id="open-payment-address1" href="#">
                                <picture>
                                    <source srcset="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" type="image/webp">
                                    <picture>
                                        <source srcset="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" type="image/webp">
                                        <img class="icon-plus-bold" src="<?= $bundle->baseUrl ?>/assets/plus-blue.svg"
                                             alt="blue-plus"></picture>
                                </picture>
                                Add Line 2
                            </a>
                            <?php
                            $this->registerJs("
                                    $('#open-payment-address1').on('click', function (e) {
                                        e.preventDefault();
                                        $('#payment_address1').removeClass('block-hidden');
                                        $('#payment_address1').addClass('block-show');
                                        $(this).addClass('block-hidden');
                                    });
                                ", \yii\web\View::POS_END);
                            ?>
                            <div class="form-group block-hidden" id="payment_address1">
                                <label class="" for="Street Address">Address 2</label>
                                <?= $form->field($formModel, 'address1', [
                                    'template' => '{input}',
                                    'options' => ['class' => ''],
                                ])
                                    ->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => 'Address 2'])
                                    ->label(false)
                                ?>
                            </div>

                            <?= $form->field($formModel, 'city')->textInput(['maxlength' => true, 'class' => 'form-control mb-1']) ?>

                            <div class="form-row">
                                <div class="col-8">
                                    <?php
                                    $state = ['State'];
                                    ?>
                                    <?= $form->field($formModel, 'state')->dropDownList($state, ['data-selected' => $formModel->state, 'class' => 'form-control', 'id' => 'payment-state']) ?>
                                </div>
                                <div class="col-4">
                                    <?= $form->field($formModel, 'zip')->textInput(['maxlength' => true, 'class' => 'form-control']) ?>
                                </div>
                            </div>
                        </div>

                        <a class="link-primary font-weight-bold" id="open-old-card" href="#">
                            <picture>
                                <source srcset="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" type="image/webp">
                                <picture>
                                    <source srcset="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" type="image/webp">
                                    <img class="icon-plus-bold" src="<?= $bundle->baseUrl ?>/assets/plus-blue.svg"
                                         alt="blue-plus"></picture>
                            </picture>
                            Choose an existing payment method
                        </a>
                    </div>
                    <?php
                    $this->registerJs("
                                $('#open-old-card').on('click', function (e) {
                                    e.preventDefault();
                                    
                                    
                                    $('#orders-billing').val('1');
                                    $('#selected-card').removeClass('block-hidden');
                                    $('#selected-card').addClass('block-show');
                                    $('#new-card').removeClass('block-show');
                                    $('#new-card').addClass('block-hidden');
                                });
                        ", \yii\web\View::POS_END);
                    ?>

                    <!-- Terms & Conditions -->
                    <div class="terms-conditions">
                        <div class="checkout-info__title">
                            <h3 class="title-sm">Terms & Conditions</h3>
                            <hr>
                        </div>

                        <div class="form-group-wrapper">
                            <?= $form
                                ->field($formModel, 'term', [
                                    'options' => ['class' => 'form-check form-term'],
                                    'template' => '<label for="defaultCheck1" class="checkbox path">{input}
                                                            <svg viewBox="0 0 21 21">
                                                                <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                                                            </svg>
                                                            <span class="input-text">I agree to the <a class="link" href="' . $link_to_term . '">terms and conditions.</a></span>
                                                       </label>',
                                ])
                                ->checkbox([
                                    'value' => '1',
                                    'uncheck' => 0,
                                    'checked ' => false,
                                    'label' => false,
                                    'labelOptions' => ['class' => 'checkbox path'],
                                    'class' => "form-check-input",
                                ])
                                ->label(false) ?>

                            <?= $form
                                ->field($formModel, 'subscription', [
                                    'options' => ['class' => 'form-check'],
                                    'template' => '<label for="defaultCheck2" class="checkbox path">{input}
                                                        <svg viewBox="0 0 21 21">
                                                            <path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
                                                        </svg>
                                                        <span class="input-text">Send me marketing emails so I can save on future orders.</span>
                                                   </label>',
                                ])
                                ->checkbox([
                                    'value' => '1',
                                    'uncheck' => 0,
                                    'checked ' => true,
                                    'label' => false,
                                    'labelOptions' => ['class' => 'checkbox path'],
                                    'class' => "form-check-input",
                                ])
                                ->label(false) ?>
                        </div>

                        <button type="submit" class="order-btn btn btn-primary mx-auto" id="submit_order_form">
                            <svg class="icon" width="25" height="25" viewBox="0 0 25 25" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.1569 17.8633C16.877 17.8633 15.8216 18.8962 15.8216 20.1986C15.8216 21.4785 16.8545 22.5339 18.1569 22.5339C19.4368 22.5339 20.4922 21.5009 20.4922 20.1986C20.4697 18.9187 19.4368 17.8633 18.1569 17.8633Z"
                                      fill="white"/>
                                <path d="M22.2661 6.72468C22.2212 6.72468 22.1539 6.70223 22.0865 6.70223H7.94004L7.71549 5.19776C7.58076 4.20976 6.72748 3.46875 5.71702 3.46875H3.89819C3.40418 3.46875 3 3.87293 3 4.36694C3 4.86094 3.40418 5.26513 3.89819 5.26513H5.71702C5.82929 5.26513 5.91911 5.35495 5.94157 5.46722L7.33376 14.9431C7.5134 16.1332 8.54631 17.0314 9.75887 17.0314H19.1C20.2677 17.0314 21.2781 16.2006 21.5251 15.0554L22.9847 7.7576C23.0745 7.28605 22.7601 6.8145 22.2661 6.72468Z"
                                      fill="white"/>
                                <path d="M12.431 20.0863C12.3861 18.8513 11.3532 17.8633 10.1182 17.8633C8.81579 17.9306 7.82778 19.0085 7.87269 20.2884C7.9176 21.5234 8.92806 22.5114 10.1631 22.5114H10.208C11.4879 22.444 12.4984 21.3662 12.431 20.0863Z"
                                      fill="white"/>
                            </svg>
                            COMPLETE ORDER
                        </button>
                        <?php
                        $this->registerJs("
                                $('#submit_order_form').on('click', function (e) {
                                    let term = $('#orders-term:checked').val()
                                    if(!term) {
                                        e.preventDefault();
                                        $('.form-term').addClass('has-error');
                                    }
                                });
                        ", \yii\web\View::POS_END);
                        ?>
                        <p class="text">Your payment information is stored securely.</p>
                    </div>

                </div>
                <div class="checkout-info__bottom">
                    <p class="text">Need help? Call us at <a class="link"
                                                             href="tel:(844) 423-5386">(844)&nbsp;423-5386</a></p>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

            <div class="col-12 col-lg-6 del-sm-pd">
                <div class="checkout-order">
                    <?= $this->render('../elements/order_products', ['cart' => $cart]) ?>
                    <?= $this->render('../elements/order_totals', ['cart' => $cart]) ?>
                </div>
                <div class="coupon-wrapper">
                    <form action="">
                        <div class="d-flex">
                            <div class="form-group w-100">
                                <label class="label-hidden" for="exampleInputPassword1">Coupon</label>
                                <input type="text" class="form-control" id="exampleInputPassword1"
                                       placeholder="HAVE A COUPON?">
                            </div>
                            <button class="btn primary-light coupon-btn" type="submit">
                                APPLY
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
