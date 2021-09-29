<?php

use backend\modules\excategories\models\Excategories;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\modules\excategories\models\Excategories */
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
                    <h3 class=" text-dark font-weight-bold mb-10">The Category For Exercise</h3>
                    <div class="row">
                        <div class="col-xl-7">

                                <?= $form->field($formModel, 'sort',[
                                    'template' => '<label class="control-form-label col-xl-3">Sort Order:</label><div class="col-xl-8">{input}</div>',
                                ])
                                    ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row', 'style' => 'width:100px;'])
                                    ->label(false)
                                ?>

                                <?=$form
                                    ->field($formModel,'color',[
                                        'template' => '<label class="control-form-label col-xl-3">Color:</label><div class="col-xl-8">{input}</div>',
                                    ])
                                    ->dropDownList(\common\models\Data::COLOR,[
                                        'class' => 'form-control form-control-solid row',
                                        'style'=>'width:100%;'
                                    ])->label(false);
                                ?>

                                <?= $form->field($formModel, 'title',[
                                    'template' => '<label class="control-form-label col-xl-3">Title:</label><div class="col-xl-8">{input}</div>',
                                ])
                                    ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                    ->label(false)
                                ?>
                                <div class="form-group" style="text-align:center; margin-top: 25px;">
                                    <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                                </div>

                        </div>
                        <div class="col-xl-1">
                        </div>
                        <div class="col-xl-4" style="background-color: #eeeeee">
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <?php
                                echo \wbp\imageUploader\ImageUploader::widget([
                                    'style' => 'estoreMultiple',
                                    'data' => ['size' => '123x123'],
                                    'type' => Excategories::$imageTypes[0],
                                    'item_id' => $formModel->id,
                                    'limit' => 1
                                ]);
                                ?>
                            </div>
                            <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>

                            <div class="form-group" style="text-align:center; margin-top: 25px;">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                            </div>
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
