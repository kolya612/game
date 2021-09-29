<?php

use backend\modules\members\models\Members;

$bundle = \frontend\assets\AppAsset::register($this);
?>

    <section class="dashboard pp bg-white estimate-body">
        <div class="container">
            <div class="estimate-body__header">
                <div class="row align-items-center mb-2">
                    <div class="col-6 col-md-8">
                        <h1 class="title"><?=$model->title?></h1>
                    </div>
                    <div class="col-6 col-md-4 text-right">
                        <?= $this->render('../elements/checkin-button') ?>
                    </div>
                </div>
            </div>

            <?=$model->description?>

        </div>
    </section>

    <div class="modal fade in" id="modal_weight_calc" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="progress-modal modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header__title">
                        <h5 class="title" id="staticBackdropLabel">Estimate your body fat using the Navy Seal
                            Formula.</h5>
                    </div>
                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <p class="modal-body__text">For this method, you’ll need a soft tape measure and a scale. Fill out
                        the
                        form below.</p>
                    <form action="#" id="myForm">
                        <div class="form-group fat_field">
                            <p class="form-label__text">What’s your gender?</p>
                            <label class="label-hidden" for="Gender">What’s your gender?</label>
                            <select class="form-control" id="gender">
                                <option value="0">Choose one</option>
                                <?php
                                foreach (Members::GENDER as $key => $value) {
                                    echo "<option value='$key'>$value</option>";
                                }
                                ?>

                            </select>
                        </div>

                        <div class="weight-data-group">
                            <div class="row">
                                <div class="col-12">
                                    <p class="form-label__text">What is your current height?</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="Height"></label>
                                                    <input type="text" class="form-control" name="height_ft"
                                                           id="height_ft"
                                                           placeholder="Сurrent height ft">
                                                    <span class="form-group__text">ft</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="in"></label>
                                                    <input type="text" class="form-control " name="height_in"
                                                           id="height_in"
                                                           placeholder="">
                                                    <span class="form-group__text">in</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <p class="form-label__text">What is your age and weight?</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="Age">Age</label>
                                                    <input type="text" class="form-control " name="age" id="age"
                                                           placeholder="Age">
                                                    <span class="form-group__text">years</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="Weight">Weight</label>
                                                    <input type="text" class="form-control " name="weight" id="weight"
                                                           placeholder="Weight">
                                                    <span class="form-group__text">lbs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- men: abdomen - neck -->
                                <div class="col-12 men_fat block-hidden ">
                                    <p class="form-label__text">Measurements</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="Neck">Neck</label>
                                                    <input type="text" class="form-control " id="men_neck"
                                                           name="men_neck"
                                                           placeholder="Neck">
                                                    <span class="form-group__text">in</span>
                                                    <img class="help-popup" src="<?= $bundle->baseUrl ?>/assets/i-help.svg" alt="i-help" data-toggle="tooltip" data-placement="top" title="Measure around the larynx.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="abdomen">Hip</label>
                                                    <input type="text" class="form-control " id="abdomen" name="abdomen"
                                                           placeholder="abdomen">
                                                    <span class="form-group__text">in</span>
                                                    <img class="help-popup" src="<?= $bundle->baseUrl ?>/assets/i-help.svg" alt="i-help" data-toggle="tooltip" data-placement="top" title="Measure around the widest part of the buttock or hip.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- women: waist + hip - neck -->
                                <div class="col-12 women_fat block-hidden">
                                    <p class="form-label__text">Measurements</p>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="Neck">Neck</label>
                                                    <input type="text" class="form-control " id="neck" name="neck"
                                                           placeholder="Neck">
                                                    <span class="form-group__text">in</span>
                                                    <img class="help-popup" src="<?= $bundle->baseUrl ?>/assets/i-help.svg" alt="i-help" data-toggle="tooltip" data-placement="top" title="Measure around the larynx.">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="Weight">Weight</label>
                                                    <input type="text" class="form-control " id="hip" name="hip"
                                                           placeholder="Hip">
                                                    <span class="form-group__text">in</span>
                                                    <img class="help-popup" src="<?= $bundle->baseUrl ?>/assets/i-help.svg" alt="i-help" data-toggle="tooltip" data-placement="top" title="If you’re a male, measure around your navel. If you’re a female, measure around the narrowest part of your waist. ">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="row-text fat_field">
                                                    <label class="control-label" for="Waist">Waist</label>
                                                    <input type="text" class="form-control" id="waist" name="waist"
                                                           placeholder="Waist">
                                                    <span class="form-group__text">in</span>
                                                    <img class="help-popup" src="<?= $bundle->baseUrl ?>/assets/i-help.svg" alt="i-help" data-toggle="tooltip" data-placement="top" title="Measure around the widest part of the buttock or hip.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary w-100" id="estimate_fat" type="submit">Estimate Body Fat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade in" id="modal_fate-success" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">

        <div class="progress-modal modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="modal-header__title">
                        <h5 class="title pr-5 pr-sm-4" id="staticBackdropLabel">Estimate your body fat using the Navy Seal
                            Formula.</h5>
                    </div>
                    <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="text-align: center;">
                    <p class="modal-body__text">Your Estimated Body Fat</p>
                    <h1 id="result_fat"></h1>
                    <br/><br/>
                    <button class="btn btn-primary w-100" id="copy_fat" type="submit">Copy Body Fat</button>
                    <br/>
                    <button class="btn btn-outline-primary w-100" id="clear_estimate" type="submit">Start over</button>
                </div>
            </div>
        </div>
    </div>
<?php
$this->registerJs("
    (function(){
        var text1 = document.getElementById('height_ft'), testText1;
        text1.onkeyup             =  function testKey1(){
           var testText1          =  text1.value;
           if(testText1*1 + 0    !=  text1.value){
              text1.value         = testText1.substring(0, testText1.length - 1) 
           }
        }
        
        var text2 = document.getElementById('height_in'), testText2;
        text2.onkeyup             =  function testKey2(){
           var testText2          =  text2.value;
           if(testText2*1 + 0    !=  text2.value){
              text2.value         = testText2.substring(0, testText2.length - 1) 
           }
        }
        
        var text3 = document.getElementById('age'), testText3;
        text3.onkeyup             =  function testKey3(){
           var testText3          =  text3.value;
           if(testText3*1 + 0    !=  text3.value){
              text3.value         = testText3.substring(0, testText3.length - 1) 
           }
        }     
        
        var text4 = document.getElementById('weight'), testText4;
        text4.onkeyup             =  function testKey4(){
           var testText4          =  text4.value;
           if(testText4*1 + 0    !=  text4.value){
              text4.value         = testText4.substring(0, testText4.length - 1) 
           }
        }                  
        
        var text5 = document.getElementById('men_neck'), testText5;
        text5.onkeyup             =  function testKey5(){
           var testText5          =  text5.value;
           if(testText5*1 + 0    !=  text5.value){
              text5.value         = testText5.substring(0, testText5.length - 1) 
           }
        }  
        
        var text6 = document.getElementById('abdomen'), testText6;
        text6.onkeyup             =  function testKey6(){
           var testText6          =  text6.value;
           if(testText6*1 + 0    !=  text6.value){
              text6.value         = testText6.substring(0, testText6.length - 1) 
           }
        }  
        
        var text7 = document.getElementById('neck'), testText7;
        text7.onkeyup             =  function testKey7(){
           var testText7          =  text7.value;
           if(testText7*1 + 0    !=  text7.value){
              text7.value         = testText7.substring(0, testText7.length - 1) 
           }
        }  
        
        var text8 = document.getElementById('hip'), testText8;
        text8.onkeyup             =  function testKey8(){
           var testText8          =  text8.value;
           if(testText8*1 + 0    !=  text8.value){
              text8.value         = testText8.substring(0, testText8.length - 1) 
           }
        }  
        
        var text9 = document.getElementById('waist'), testText9;
        text9.onkeyup             =  function testKey9(){
           var testText9          =  text9.value;
           if(testText9*1 + 0    !=  text9.value){
              text9.value         = testText9.substring(0, testText9.length - 1) 
           }
        }                                                                                                                                                                                                                                                                                                                                                         
    })();

    $('#gender').on('change', function (e) {
    
        let gender = $('#gender').val();
        
        if (gender == 1) {
            $('.men_fat').removeClass('block-hidden');
            $('.men_fat').addClass('block-show');
            $('.women_fat').removeClass('block-show');
            $('.women_fat').addClass('block-hidden');
        } else if (gender == 2) {
            $('.women_fat').removeClass('block-hidden');
            $('.women_fat').addClass('block-show');
            $('.men_fat').removeClass('block-show');
            $('.men_fat').addClass('block-hidden');
        }
    });
                
    $('#estimate_fat').on('click', function (e) {
        e.preventDefault();
        let errors = [];
        
        $('.fat_field').removeClass('has-error');
                            
        let height_ft = ($('#height_ft').val()) * 30.48;
        let height_in = ($('#height_in').val()) * 2.54;
        let height = height_ft + height_in;
         
        let fat = 0;
        
        if(height_ft == 0) errors.push('height_ft');
        if(height_in == 0) errors.push('height_in');            
        
        let gender = $('#gender').val();
        if (gender == 1) {
            let abdomen = ($('#abdomen').val()) * 2.54;
            let neck = ($('#men_neck').val()) * 2.54;
            if(abdomen == 0) errors.push('abdomen'); 
            if(neck == 0) errors.push('men_neck'); 
            if(errors.length == 0) {                                                
                fat = 495 / ( 1.0324 - 0.19077 * Math.log10( abdomen - neck ) + 0.15456 * Math.log10( height ) ) - 450;
            }
        } else if (gender == 2) {
            let waist = ($('#waist').val()) * 2.54;
            let hip = ($('#hip').val()) * 2.54;
            let neck = ($('#neck').val()) * 2.54;
            if(waist == 0) errors.push('waist');
            if(hip == 0) errors.push('hip');
            if(neck == 0) errors.push('neck');
            if(errors.length == 0) { 
                fat = 495 / ( 1.29579 - 0.35004 * Math.log10( waist + hip - neck ) + 0.22100 * Math.log10( height ) ) - 450;
           }
        } else {
            errors.push('gender');
        }
        
        fat = Math.round(fat * 10) / 10;
        
        if(errors.length > 0){
            errors.forEach(function(error) {
                  $('#' + error).parent().addClass('has-error');
            });
        } else {
            $('#modal_weight_calc').modal('hide');
            $('#result_fat').html(fat + '<small>%</small>');                     
            $('#modal_fate-success').modal('show');
            
            setTimeout(function() {
                  $('body').addClass('modal-open');
                  console.log('Ok');
            }, 1500);
        }                    
    });

    $('#clear_estimate').on('click', function (e) {
        e.preventDefault();
        $('#modal_fate-success').modal('hide');     
        $('#modal_weight_calc').modal('show');  
                
        document.getElementById('myForm').reset();   
        $('.men_fat').removeClass('block-show');
        $('.men_fat').addClass('block-hidden');
        $('.women_fat').removeClass('block-show');
        $('.women_fat').addClass('block-hidden');

        setTimeout(function() {
              $('body').addClass('modal-open');
              console.log('Ok');
        }, 1500);
    });
    
    $('#estimate_fat').on('click', function (e) {
        e.preventDefault();
        
        const str = document.getElementById('result_fat').innerText;
        const el = document.createElement('textarea');
        el.value = str;
        el.setAttribute('readonly', '');
        el.style.position = 'absolute';
        el.style.left = '-9999px';
        document.body.appendChild(el);
        el.select();
        document.execCommand('copy');
        document.body.removeChild(el);
    });
    
    $('#copy_fat').on('click', function (e) {
        document.getElementById('myForm').reset(); 
        $('#modal_fate-success').modal('hide');
    });
", \yii\web\View::POS_END);
?>