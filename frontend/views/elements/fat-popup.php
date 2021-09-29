<?php
$model=\frontend\models\FatForm::getEmptyModel();
$this->registerJs('
        $(".date-picker-input-weight").daterangepicker({
            singleDatePicker: true,
            opens: "center",
            drops: "auto",
            autoApply: true,
        
            locale: {
                format: "MM/DD/YYYY"
            }
        });
        
        $(document).on("keyup keydown change", "#fatform-fat", function(){
            if($(this).val())
                $("#fat-tracking-form button").removeClass("disabled");
            else
                $("#fat-tracking-form button").addClass("disabled");
        })
        
        $("#fatform-date").on("change",function(){
            getFatByDate();
        });
        
        $("#fat-tracking-form").on("beforeSubmit", function() {
            showLoader();
            $.ajax({url: "'.\yii\helpers\Url::to(['my-progress/track-fat']).'", data: $(this).serialize(), method: "GET", success: function(html){
                $("#popup_body-fat").modal("hide");
                $("body").append(html);
                $("#fat-tracking-form button").addClass("disabled");
                $("#fat-tracking-form")[0].reset();
                
                $(".my-progress-container").each(function(){
                    $.pjax.reload({container: "#"+$(this).attr("id"), timeout: 10000, history:false});
                });
                hideLoader();
            }});
            return false;
        });
        
        function getFatByDate(date, showPopup=false){
            if(date) $("#fatform-date").val(date);
//            if(!$("#fatform-weight").val()){
                $.ajax({url: "'.\yii\helpers\Url::to(['my-progress/get-fat']).'", data: $("#fat-tracking-form").serialize(), method: "GET", success: function(html){
                    if(html || date){
                         $("#fatform-fat").val(html);
                         $("#fatform-fat").change();
                    }
                    if(showPopup) $("#popup_body-fat").modal("show");
                }});
//            }
        }
    ',\yii\web\View::POS_END);
?>
<div class="modal fade in" id="popup_body-fat" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="progress-modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header__title">
                    <svg width="20" height="31" viewBox="0 0 20 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.46969 19.9334C7.95455 19.4517 8.39225 19.016 8.79473 18.6076C6.48103 16.0574 5.60547 14.0586 5.60547 9.34766C5.60547 6.39594 6.37621 3.58133 7.66797 1.91791L8.7683 0.5H6.97357C2.41 0.5 0.332031 6.48178 0.332031 11.9844C0.332676 17.6667 2.20551 21.9661 3.96473 24.9285C4.20057 23.7046 4.79846 22.5828 5.71451 21.6929C6.31615 21.0809 6.91439 20.4853 7.46969 19.9334Z"
                              fill="#7084CB"/>
                        <path d="M13.0264 0.5H11.2316L12.332 1.91791C13.6238 3.58133 14.3945 6.39594 14.3945 9.34766C14.3945 15.4717 12.962 16.9534 8.70912 21.1805C8.15811 21.7281 7.56414 22.3186 6.9393 22.9538C6.07926 23.7889 5.60547 24.9081 5.60547 26.1055C5.60547 28.5285 7.57697 30.5 10 30.5C11.4746 30.5 12.8436 29.7662 13.6615 28.5371C13.8152 28.3062 13.9946 28.0478 14.1928 27.762C16.106 25.0068 19.6671 19.819 19.668 11.9844C19.668 6.48178 17.59 0.5 13.0264 0.5ZM10 27.3483L8.75717 26.1055L10 24.8626L11.2428 26.1055L10 27.3483Z"
                              fill="#7084CB"/>
                    </svg>
                    <h5 class="title" id="staticBackdropLabel">Body Fat %</h5>
                </div>

                <button type="submit" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>

            <div class="modal-body">
                <p class="modal-body__text">Please enter your body fat percentage. Not sure how? Check out this
                    <a class="link" href="<?=\yii\helpers\Url::to(['guide/fat'])?>">guide</a>
                    to learn how to estimate.</p>

                <? $form=\yii\widgets\ActiveForm::begin(['id'=>'fat-tracking-form'])?>
                    <div class="modal__data-info">
                        <div class="form-row align-items-start">
                            <div class="col-5 col-sm-4">
                                <?=$form->field($model,'fat',[
                                        'options'=>[
                                            'class'=>'form-group form-row'
                                        ],
                                        'template'=>'<div class="row-text col-12">{input}<span>%</span></div>{hint}{error}'
                                    ])->textInput()->label(false)
                                ?>
                            </div>

                            <?=$form->field($model,'date',[
                                    'options'=>[
                                        'class'=>'form-group position-relative col-7 col-sm-8 pl-sm-4'
                                    ],
                                    'template'=>'{label}{input}<svg class="icon-data" width="30" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M24.6119 6.25H23.3663V3.75C23.3663 3.41848 23.2351 3.10054 23.0015 2.86612C22.7679 2.6317 22.4511 2.5 22.1208 2.5C21.7904 2.5 21.4736 2.6317 21.24 2.86612C21.0065 3.10054 20.8752 3.41848 20.8752 3.75V6.25H10.9108V3.75C10.9108 3.41848 10.7796 3.10054 10.546 2.86612C10.3124 2.6317 9.9956 2.5 9.66526 2.5C9.33492 2.5 9.01811 2.6317 8.78452 2.86612C8.55093 3.10054 8.41971 3.41848 8.41971 3.75V6.25H7.17416C6.18313 6.25 5.2327 6.64509 4.53194 7.34835C3.83118 8.05161 3.4375 9.00544 3.4375 10V11.25H28.3485V10C28.3485 9.00544 27.9549 8.05161 27.2541 7.34835C26.5533 6.64509 25.6029 6.25 24.6119 6.25Z" fill="#56666D"/><path d="M3.4375 23.75C3.4375 24.7446 3.83118 25.6984 4.53194 26.4016C5.2327 27.1049 6.18313 27.5 7.17416 27.5H24.6119C25.6029 27.5 26.5533 27.1049 27.2541 26.4016C27.9549 25.6984 28.3485 24.7446 28.3485 23.75V13.75H3.4375V23.75Z" fill="#56666D"/></g><defs><clipPath id="clip0"><rect width="29.8932" height="30" fill="white" transform="translate(0.946289)"/></clipPath></defs></svg>{hint}{error}'
                                ])->textInput(['class'=>'form-control date-picker-input-weight','autocomplete'=>'off'])->label(false)
                            ?>

                        </div>
                    </div>
                    <button class="btn btn-primary w-100 disabled" id="add-fat-button" type="submit" disabled>Save</button>
                <? \yii\widgets\ActiveForm::end(); ?>
                <?php
                $this->registerJs("$('#fat-tracking-form').change(function(){
                            $('#add-fat-button').removeClass('disabled');
                            $('#add-fat-button').prop('disabled', false);
                        });
                ", \yii\web\View::POS_END);
                ?>
            </div>
        </div>
    </div>

</div>
