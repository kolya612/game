<?php

use yii\widgets\ActiveForm;
use vendor\wbp\multipleCountrySelector\CountryStateHelper;
use yii\helpers\Url;

$form = ActiveForm::begin(['id' => 'add-edit-form']);
?>
<div class="mb-4">
    <h3 class="title-sm"><?= $title ?></h3>
    <div class="form-row">
        <div class="col-6">
            <?= $form->field($formModel, 'first_name')->textInput(['maxlength' => true, 'class' => 'form-control',]) ?>
        </div>
        <div class="col-6">
            <?= $form->field($formModel, 'last_name')->textInput(['maxlength' => true, 'class' => 'form-control',]) ?>
        </div>
    </div>

    <div class="credit-card__form-group">
        <?= $form->field($formModel, 'card_number')->textInput(['maxlength' => true, 'class' => 'form-control',]) ?>
        <picture class="" id="credit-card-label">
<!--            <img class="icon" src=" --><?//= $bundle->baseUrl ?><!--/assets/def-icon-credit-card.svg" alt="visa" width="34px">-->
        </picture>
    </div>

    <?php
    if (!empty($formModel->id)) {
        $this->registerJs("
            var card = '$formModel->card_number';
            var creditcard = new CreditCard();
            var type = creditcard.getCreditCardNameByNumber(card);
    
            if (type == 'Visa') {
                $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/visa-icon.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/visa-icon.svg\" alt=\"visa\" width=\"34px\">');
            } else if (type == 'Mastercard') {
                $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/mastercard-logo.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/mastercard-logo.svg\" alt=\"Mastercard\" width=\"34px\">');
            } else if (type == 'Discover') {
                $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/discover-logo.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/discover-logo.svg\" alt=\"Discover\" width=\"34px\">');
            } else if (type == 'Amex') {
                $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/amex-logo.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/amex-logo.svg\" alt=\"Amex\" width=\"34px\">');
            } else {
                $('#credit-card-label').html('');           
            }
        ", \yii\web\View::POS_END);
    }
    $this->registerJs("
            $('#billings-card_number').on('change', function(){
            
                var valueNew = $('#billings-card_number').val();
                var creditcardNew = new CreditCard();
                var typeNew = creditcardNew.getCreditCardNameByNumber(valueNew);
                console.log(typeNew);
                
                if (typeNew == 'Visa') {
                    $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/visa-icon.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/visa-icon.svg\" alt=\"visa\" width=\"34px\">');
                } else if (typeNew == 'Mastercard') {
                    $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/mastercard-logo.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/mastercard-logo.svg\" alt=\"Mastercard\" width=\"34px\">');
                } else if (typeNew == 'Discover') {
                    $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/discover-logo.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/discover-logo.svg\" alt=\"Discover\" width=\"34px\">');
                } else if (typeNew == 'Amex') {
                    $('#credit-card-label').html('<source srcset=\"$bundle->baseUrl/assets/amex-logo.svg\" type=\"image/webp\"><img class=\"icon\" src=\"$bundle->baseUrl/assets/amex-logo.svg\" alt=\"Amex\" width=\"34px\">');
                } else {
                    $('#credit-card-label').html('');           
                 }
            });
        ", \yii\web\View::POS_END);
    ?>

    <div class="form-row">
        <div class="col-6">
            <?= $form->field($formModel, 'expiration_date')->textInput(['maxlength' => true, 'class' => 'form-control',]) ?>
            <?php
            $this->registerJs("
                        var element = document.getElementById('billings-expiration_date');
                        var maskOptions = {
                          mask: '00/00'
                        };
                        var mask = IMask(element, maskOptions);
                    ", \yii\web\View::POS_END);
            ?>
        </div>
    </div>
    <!--
    <div class="form-row">
        <div class="col-6">
            <div class="form-group">
                <label class="label-hidden" for="expiration_month">Expiration Month</label>
                <?= $form->field($formModel, 'expiration_month', [
        'template' => '{input}',
        'options' => ['class' => ''],
    ])
        ->dropDownList(\common\models\Data::MONTH, ['class' => 'form-control'])
        ->label(false)
    ?>
            </div>
        </div>

        <div class="col-6">
            <div class="form-group">
                <label class="label-hidden" for="last-name">Expiration Year</label>
                <?= $form->field($formModel, 'expiration_year', [
        'template' => '{input}',
        'options' => ['class' => ''],
    ])
        ->dropDownList(\common\models\Data::yearsForCard(), ['class' => 'form-control'])
        ->label(false)
    ?>
            </div>
        </div>
    </div>
    -->
</div>

<h3 class="title-sm">Billing Address</h3>

<div class="add-line__form-group">
    <?= $form->field($formModel, 'address')->textInput(['maxlength' => true, 'class' => 'form-control',]) ?>

    <div class="form-group <?php echo empty($formModel->address1) ? 'block-hidden' : ''; ?>" id="address-billing-1">
        <label for="street-address">Street Address 2</label>

        <?= $form->field($formModel, 'address1', [
            'template' => '{input}',
            'options' => ['class' => ''],
        ])
            ->textInput(['maxlength' => true, 'class' => 'form-control', 'placeholder' => 'Address 2'])
            ->label(false)
        ?>
    </div>
    <?php if (empty($formModel->address1)) { ?>
        <a class="link-primary font-weight-bold " id="open-address-billing-1" href="#">
            <picture>
                <source srcset="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" type="image/webp">
                <img class="icon" src="<?= $bundle->baseUrl ?>/assets/plus-blue.svg" alt="blue-plus"></picture>
            Add Address 2
        </a>
    <?php } ?>
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
</div>

<div class="form-row">
    <div class="col-6">
        <?= $form->field($formModel, 'country')->dropDownList(CountryStateHelper::getCountries(), ['class' => 'form-control']) ?>
    </div>
    <?php
    $this->registerJs("
            $('#billings-country').on('change', function (e) {
                $.ajax({
                    url:'" . Url::to(['get-states']) . "',
                    data:{
                        'country_id':$('#billings-country').val(),
                    },
                    type:'POST',
                    dataType: 'json',
                    success:function(items){
                        $('#billings-state > option').remove();
                            for (const [key, value] of Object.entries(items)) {
                                $('#billings-state').append($('<option>', {
                                    value: key,
                                    text : value
                                }));
                            }
                    } 
                })
            })
        ", \yii\web\View::POS_END);
    ?>
    <div class="col-6">
        <?php
            $state = ['State'];
            if(!empty($formModel->country)) {
                $state = CountryStateHelper::getStatesForCountry($formModel->country);
            }
        ?>
        <?= $form->field($formModel, 'state')->dropDownList($state, ['class' => 'form-control']) ?>
    </div>
</div>

<div class="form-row">
    <div class="col-8">
        <?= $form->field($formModel, 'city')->textInput(['maxlength' => true, 'class' => 'form-control',]) ?>
    </div>
    <div class="col-4">
        <?= $form->field($formModel, 'zip')->textInput(['maxlength' => true, 'class' => 'form-control',]) ?>
    </div>
</div>

<div class="payment-method__footer">
    <button class="btn btn-primary disabled" id="add-edit-form-button" type="submit" disabled>
        <svg class="icon" width="15" height="20" viewBox="0 0 15 20" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M14.5833 7.5H13.3333V5.83332C13.3333 2.6168 10.7166 0 7.5 0C4.28344 0 1.66668 2.6168 1.66668 5.83332V7.5H0.41668C0.186367 7.5 0 7.68637 0 7.91668V18.3334C0 19.2525 0.747461 20 1.66668 20H13.3334C14.2525 20 15 19.2525 15 18.3333V7.91668C15 7.68637 14.8136 7.5 14.5833 7.5ZM8.74758 16.204C8.76059 16.3216 8.72277 16.4396 8.64383 16.5279C8.56488 16.6162 8.45176 16.6667 8.33336 16.6667H6.66668C6.54828 16.6667 6.43516 16.6162 6.35621 16.5279C6.27727 16.4396 6.23941 16.3216 6.25246 16.204L6.51531 13.8404C6.08848 13.5299 5.83336 13.0387 5.83336 12.5C5.83336 11.5808 6.58082 10.8333 7.50004 10.8333C8.41926 10.8333 9.16672 11.5808 9.16672 12.5C9.16672 13.0387 8.9116 13.5299 8.48477 13.8404L8.74758 16.204ZM10.8333 7.5H4.16668V5.83332C4.16668 3.99535 5.66203 2.5 7.5 2.5C9.33797 2.5 10.8333 3.99535 10.8333 5.83332V7.5Z"
                  fill="white"/>
        </svg>
        <span>Save Payment Details</span>
    </button>
    <p class="text">Your payment information is stored securely.</p>
    <?php
    if (!empty($formModel->id)) { ?>
        <p class="link link-primary">Remove this payment method.
            <a class="icon"
               href="<?= \yii\helpers\Url::to(['settings/billing-delete', 'billing_id' => $formModel->id]) ?>">
                <picture>
                    <source srcset="<?= $bundle->baseUrl ?>/assets/exit-blue.svg" type="image/webp">
                    <img src="<?= $bundle->baseUrl ?>/assets/exit-blue.svg" alt="exit"></picture>
            </a>
        </p>
    <?php } ?>
</div>
<?php ActiveForm::end(); ?>

<?php
$this->registerJs("$('#add-edit-form').change(function(){
                        $('#add-edit-form-button').removeClass('disabled');
                        $('#add-edit-form-button').prop('disabled', false);
                    });
", \yii\web\View::POS_END);
?>
