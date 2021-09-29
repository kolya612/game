<?php

use backend\modules\mecategories\models\Mecategories;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\modules\mecategories\models\Mecategories */
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
                    <h3 class=" text-dark font-weight-bold mb-10">The Category for meal</h3>
                    <div class="row">
                        <div class="col-xl-9">

                            <?= $form->field($formModel, 'status',[
                                'options' => ['class' => 'row form-group'],
                                'template' => '<label class="col-2 col-form-label">Status (ON/OFF)</label>
                                                    <div class="col-10">
                                                            {input}
                                                    </div>',
                            ])->checkbox([
                                'value'=>1,
                                'uncheck'=>0,
                                'checked '=>$formModel->status?true:false,
                                'label'=>false,
                                'class' => ''
                            ], false)
                                ->label(null, ['class'=>'','style'=>'font-weight:400!important'])
                            ?>

                            <?= $form->field($formModel, 'title',[
                                'template' => '<label class="control-form-label col-xl-2">Title:</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'view',[
                                'template' => '<label class="control-form-label col-xl-2">Template<br />(if you need)</label><div class="col-xl-10">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid row'])
                                ->label(false)
                            ?>
                            <?= $form->field($formModel, 'description',[
                                'template' => '<label class="control-form-label col-xl-2">Main text:</label><div class="col-xl-10" style="padding:0px 25px 0px 0px!important">{input}</div>',
                            ])
                                ->textarea(['class' => 'form-control form-control-solid','style' => 'min-height: 600px'])
                                ->label(false)
                            ?>

                            <div class="form-group" style="text-align:center; margin-top: 25px;">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <!--
                            <div class="image-input image-input-outline" id="kt_image_1">
                                <?php
                                echo \wbp\imageUploader\ImageUploader::widget([
                                    'style' => 'estoreMultiple',
                                    'data' => ['size' => '123x123'],
                                    'type' => Mecategories::$imageTypes[0],
                                    'item_id' => $formModel->id,
                                    'limit' => 1
                                ]);
                                ?>
                            </div>
                            <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>

                            <div class="form-group" style="text-align:center; margin-top: 25px;">
                                <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                            </div>
                            -->
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
