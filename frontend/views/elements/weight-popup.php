<?php

    $model=\frontend\models\WeightForm::getEmptyModel();
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
        
        $(document).on("keyup keydown change", "#weightform-weight", function(){
            if($(this).val())
                $("#weight-tracking-form button").removeClass("disabled");
            else
                $("#weight-tracking-form button").addClass("disabled");
        })
        
        $("#weightform-date").on("change",function(){
            getWeightByDate();
        });
        
        $("#weight-tracking-form").on("beforeSubmit", function() {
            showLoader();
            $.ajax({url: "'.\yii\helpers\Url::to(['my-progress/track-weight']).'", data: $(this).serialize(), method: "GET", success: function(html){
                $("#popup_weight").modal("hide");
                $("body").append(html);
                $("#weight-tracking-form button").addClass("disabled");
                $("#weight-tracking-form")[0].reset();
                
                $(".my-progress-container").each(function(){
                    $.pjax.reload({container: "#"+$(this).attr("id"), timeout: 10000, history:false});
                });
                
                if($("#weight_chart").length){
                    $.pjax.reload({container: "#weight_chart", timeout: 10000, history:false});
                }
                hideLoader();
            }});
            return false;
        });
        
        function getWeightByDate(date, showPopup=false){
            if(date) $("#weightform-date").val(date);
//            if(!$("#weightform-weight").val()){
                $.ajax({url: "'.\yii\helpers\Url::to(['my-progress/get-weight']).'", data: $("#weight-tracking-form").serialize(), method: "GET", success: function(html){
                    if(html || date){
                         $("#weightform-weight").val(html);
                         $("#weightform-weight").change();
                    }
                    if(showPopup) $("#popup_weight").modal("show");
                }});
//            }
        }
    ',\yii\web\View::POS_END);
?>

<div class="modal fade in" id="popup_weight" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">

    <div class="progress-modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-header__title">
                    <svg width="29" height="31" viewBox="0 0 29 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.3554 0.5H4.64455C2.08353 0.5 0 2.58353 0 5.14455V25.8555C0 28.4165 2.08353 30.5 4.64455 30.5H25.3555C27.9165 30.5 30 28.4165 30 25.8554V5.14455C30 2.58353 27.9165 0.5 25.3554 0.5ZM22.9424 8.80045L19.615 12.1282C19.2717 12.4715 18.7154 12.4713 18.3721 12.1284C17.4703 11.2269 16.2727 10.7305 15 10.7305C13.7273 10.7305 12.5297 11.2269 11.6279 12.1284C11.2846 12.4714 10.7282 12.4714 10.385 12.1282L7.05762 8.80045C6.71443 8.45721 6.71449 7.90074 7.05768 7.5575C9.18041 5.43471 12.0011 4.26564 15 4.26564C17.9989 4.26564 20.8196 5.43471 22.9423 7.55756C23.2855 7.90074 23.2856 8.45721 22.9424 8.80045Z" fill="#7084CB"/>
                    </svg>

                    <h5 class="title" id="staticBackdropLabel">Weight Tracker</h5>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p class="modal-body__text">Enter your weight below.</p>

                <? $form=\yii\widgets\ActiveForm::begin(['id'=>'weight-tracking-form'])?>
                    <div class="modal__data-info">
                        <div class="form-row align-items-start">
                            <div class="col-5 col-sm-4">
                                <?=$form->field($model,'weight',[
                                        'options'=>[
                                            'class'=>'form-group form-row'
                                        ],
                                        'template'=>'<div class="row-text col-12">{input}<span>lbs</span></div>{hint}{error}'
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

                    <button class="btn btn-primary w-100 disabled" id="add-tracker-button" type="submit" disabled>Save</button>
                <? \yii\widgets\ActiveForm::end(); ?>
                <?php
                $this->registerJs("$('#weight-tracking-form').change(function(){
                            $('#add-tracker-button').removeClass('disabled');
                            $('#add-tracker-button').prop('disabled', false);
                        });
                ", \yii\web\View::POS_END);
                ?>
            </div>
        </div>
    </div>

</div>
