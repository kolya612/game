<?php

use backend\modules\members\models\Members;
use backend\modules\progress\models\Progress;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\modules\progress\models\Progress */
/* @var $form yii\bootstrap4\ActiveForm */

$form = ActiveForm::begin(['layout' => 'horizontal', 'id'=>'add-edit-form']);
?>
<input type="hidden" name="action-after-save" value="edit" />

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <!--begin::Form-->
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">The Progress:</h3>
                    <div class="row">
                        <div class="col-xl-4">
                            <?=$form
                                ->field($formModel,'member_id',[
                                    'options'=>[],
                                    'template' => '<label class="control-form-label">Member:</label>{input}',
                                ])
                                ->dropDownList(Members::getList('id', 'idFnameLname','id desc', false, false, true),[
                                        'class' => 'form-control form-control-solid'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="col-xl-2" style="margin: 0px 20px;">
                            <?= $form->field($formModel, 'weight',[
                                'template' => '<label class="control-form-label">Weight:</label>{input}',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(false)
                            ?>
                        </div>
                        <div class="col-xl-2" style="margin: 0px 20px;">
                            <?= $form->field($formModel, 'fat',[
                                'template' => '<label class="control-form-label">Fat:</label>{input}',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(false)
                            ?>
                        </div>
                        <div class="col-xl-2" style="margin: 0px 20px;">
                            <?= $form->field($formModel, 'date',[
                                'template' => '<label class="control-form-label">Date:</label>{input}',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(false)
                                ->widget(DatePicker::ClassName(),
                                    [
                                        'pluginOptions' => [
                                            'format' => 'yyyy-mm-dd',
                                            'todayHighlight' => true
                                        ]
                                    ]);
                            ;
                            ?>
                        </div>
                    </div>
                    <div class="form-group" style="text-align:center; margin-top: 25px;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                    </div>
                    <br /><br />


                    <div class="bg-gray-100" style="padding: 20px 50px; text-align: center">
                        <div class="row">
                            <div class="col-xl-4">
                                <label class="control-form-label">Front:</label>
                            </div>
                            <div class="col-xl-4">
                                <label class="control-form-label">Side:</label>
                            </div>
                            <div class="col-xl-4">
                                <label class="control-form-label">Back:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="image-input image-input-outline" id="kt_image_1">
                                    <?php
                                    echo \wbp\imageUploader\ImageUploader::widget([
                                        'style' => 'estoreMultiple',
                                        'data' => ['size' => '123x123'],
                                        'type' => Progress::$imageTypes[0],
                                        'item_id' => $formModel->id,
                                        'limit' => 1
                                    ]);
                                    ?>
                                </div>
                                <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>
                            </div>
                            <div class="col-xl-4">
                                <div class="image-input image-input-outline" id="kt_image_2">
                                    <?php
                                    echo \wbp\imageUploader\ImageUploader::widget([
                                        'style' => 'estoreMultiple',
                                        'data' => ['size' => '123x123'],
                                        'type' => Progress::$imageTypes[1],
                                        'item_id' => $formModel->id,
                                        'limit' => 1
                                    ]);
                                    ?>
                                </div>
                                <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>
                            </div>
                            <div class="col-xl-4">
                                <div class="image-input image-input-outline" id="kt_image_3">
                                    <?php
                                    echo \wbp\imageUploader\ImageUploader::widget([
                                        'style' => 'estoreMultiple',
                                        'data' => ['size' => '123x123'],
                                        'type' => Progress::$imageTypes[2],
                                        'item_id' => $formModel->id,
                                        'limit' => 1
                                    ]);
                                    ?>
                                </div>
                                <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>
                            </div>
                        </div>
                        <div class="form-group" style="text-align:center; margin-top: 25px;">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                        </div>
                    </div>



                </div>
                <div class="separator separator-dashed my-10"></div>
            </div>




            <div class="col-xl-1"></div>
        </div>

        <!--end::Form-->
    </div>
</div>

<?php ActiveForm::end(); ?>
