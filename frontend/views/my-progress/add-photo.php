<?php
    use backend\modules\progress\models\Progress;
    $this->registerJs("
        $('#progress-date').change(function(){
            var date=$(this).val();
            $.ajax({url: '".\yii\helpers\Url::to(['check-date'])."', data: {date: date}, method: 'GET', success: function(result){
                if(result){
                    $('#editButton').attr('href','".\yii\helpers\Url::to(['add-photo'])."?date='+date);
                    $('#alertBlock').show();
                }else{
                    $('#alertBlock').hide();
                }
            }})
        });
    ",\yii\web\View::POS_END);

?>


<section class="photo-checkin">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-8 border-st">
                <? $form=\yii\widgets\ActiveForm::begin(); ?>
                    <div class="loading-photo pp">
                        <div class="alert-block" style="display: none;" id="alertBlock">
                            <div class="alert alert-danger medium-pd medium-br" role="alert">
                                You already have a photo checkin for this date.

                                <a href="#" id="editButton" class="btn btn-outline-primary btn-sm" style="float: right;">Edit</a>
                            </div>
                        </div>

                        <h2 class="title data-title">When did you take these photos?</h2>
                        <div class="edit-data-wrapper">
                            <?=$form->field($model,'date',[
                                    'options'=>[
                                        'class'=>'form-group'
                                    ],
                                    'template'=>'{label}{input}<svg class="icon-data" width="30" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0)"><path d="M24.6119 6.25H23.3663V3.75C23.3663 3.41848 23.2351 3.10054 23.0015 2.86612C22.7679 2.6317 22.4511 2.5 22.1208 2.5C21.7904 2.5 21.4736 2.6317 21.24 2.86612C21.0065 3.10054 20.8752 3.41848 20.8752 3.75V6.25H10.9108V3.75C10.9108 3.41848 10.7796 3.10054 10.546 2.86612C10.3124 2.6317 9.9956 2.5 9.66526 2.5C9.33492 2.5 9.01811 2.6317 8.78452 2.86612C8.55093 3.10054 8.41971 3.41848 8.41971 3.75V6.25H7.17416C6.18313 6.25 5.2327 6.64509 4.53194 7.34835C3.83118 8.05161 3.4375 9.00544 3.4375 10V11.25H28.3485V10C28.3485 9.00544 27.9549 8.05161 27.2541 7.34835C26.5533 6.64509 25.6029 6.25 24.6119 6.25Z" fill="#56666D"/><path d="M3.4375 23.75C3.4375 24.7446 3.83118 25.6984 4.53194 26.4016C5.2327 27.1049 6.18313 27.5 7.17416 27.5H24.6119C25.6029 27.5 26.5533 27.1049 27.2541 26.4016C27.9549 25.6984 28.3485 24.7446 28.3485 23.75V13.75H3.4375V23.75Z" fill="#56666D"/></g><defs><clipPath id="clip0"><rect width="29.8932" height="30" fill="white" transform="translate(0.946289)"/></clipPath></defs></svg>{hint}{error}'
                                ])->textInput(['value'=>$model->formatedDate,'class'=>'form-control date-picker-input-weight','autocomplete'=>'off'])->label(false)
                            ?>
                        </div>

                        <div class="edit-photo-group">
                            <h2 class="title">Upload Photos</h2>

                            <div class="edit-photo__block">
                                <div class="edit-photo__items">
                                    <div class="edit-photo">
                                        <?php
                                            echo \wbp\imageUploader\ImageUploader::widget([
                                                'style' => 'vipportal',
                                                'data' => ['size' => '250x440'],
                                                'buttonText1'=>'Front',
                                                'buttonText2'=>'Drag and drop your<br>photos or click to upload',
                                                'type' => Progress::$imageTypes[0],
                                                'item_id' => $model->id,
                                                'limit' => 1
                                            ]);
                                        ?>
                                    </div>
                                </div>

                                <div class="edit-photo__items">
                                    <div class="edit-photo">
                                        <?php
                                            echo \wbp\imageUploader\ImageUploader::widget([
                                                'style' => 'vipportal',
                                                'data' => ['size' => '250x440'],
                                                'buttonText1'=>'Side',
                                                'buttonText2'=>'Drag and drop your<br>photos or click to upload',
                                                'type' => Progress::$imageTypes[1],
                                                'item_id' => $model->id,
                                                'limit' => 1
                                            ]);
                                        ?>
                                    </div>
                                </div>

                                <div class="edit-photo__items">
                                    <div class="edit-photo">
                                        <?php
                                            echo \wbp\imageUploader\ImageUploader::widget([
                                                'style' => 'vipportal',
                                                'data' => ['size' => '260x450'],
                                                'buttonText1'=>'Back',
                                                'buttonText2'=>'Drag and drop your<br>photos or click to upload',
                                                'type' => Progress::$imageTypes[2],
                                                'item_id' => $model->id,
                                                'limit' => 1
                                            ]);
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <span class="has-img-error" id="image_download_error"></span>

                        </div>

                        <button class="btn btn-blue-style disabled" id="add-edit-form-button" type="submit" disabled>Upload Photos</button>
                    </div>
                <? \yii\widgets\ActiveForm::end(); ?>
            </div>

            <?php
                $this->registerJs("$('#w0').change(function(){
                            $('#add-edit-form-button').removeClass('disabled');
                            $('#add-edit-form-button').prop('disabled', false);
                        });
                ", \yii\web\View::POS_END);
            ?>

            <div class="col-12 col-lg-4">
                <div class="about-photo-checkin pp">
                    <h1 class="title">Photo Checkin</h1>
                    <p class="text mb">Use your timer and a phone stand to help you get the most consistent
                        shots.</p>
                    <p class="text mb">Follow these suggestions for best results:</p>

                    <ol>
                        <li class="text">Take vertical, full-body photos.</li>
                        <li class="text">Take photos right when you wake up.</li>
                        <li class="text">Take photos before eating or drinking.</li>
                        <li class="text"> Use the same lighting for all photos.</li>
                        <li class="text"> Use same location and placement.</li>
                    </ol>

                </div>
            </div>
        </div>
    </div>
</section>

