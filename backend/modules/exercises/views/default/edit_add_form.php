<?php

use backend\modules\excategories\models\Excategories;
use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\web\View;
use backend\modules\exercises\models\Exercises;

/* @var $this yii\web\View */
/* @var $model backend\modules\exercises\models\Exercises */
/* @var $form yii\bootstrap4\ActiveForm */

$form = ActiveForm::begin(['layout' => 'horizontal', 'id'=>'add-edit-form']);
?>
<input type="hidden" name="action-after-save" value="edit" />

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <!--begin::Form-->
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-7">
                <div class="my-5">
                    <h3 class="text-dark font-weight-bold mb-10" style="text-align: center; padding: 0px 0px 30px 0px;">Main informations</h3>
                    <div class="row">
                        <div class="col-xl-11">
                            <?= $form->field($formModel, 'status',[
                                'options' => ['class' => 'row form-group'],
                                'template' => '<label class="col-3 col-form-label">Status (ON/OFF)</label>
                                                    <div class="col-8">
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
                        </div>
                        <div class="col-xl-11">
                            <?= $form->field($formModel, 'title',[])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label('Title:')
                            ?>
                        </div>
                        <div class="col-xl-11">
                            <?= $form->field($formModel, 'time',[])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label('Time:')
                            ?>
                        </div>
                        <div class="col-xl-11">
                            <?= $form->field($formModel, 'video',[])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label('Video link:')
                            ?>
                        </div>
                        <div class="col-xl-11">
                            <?= $form->field($formModel, 'short_text',[])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label('Short text:')
                            ?>
                        </div>
<!--
                        <div class="col-xl-11">
                            <?= $form->field($formModel, 'viewed',[])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label('Viewed:')
                            ?>
                        </div>
-->
                        <div class="col-xl-11">
                            <?=$form
                                ->field($formModel,'excategoriesIds',[])
                                ->dropDownList(Excategories::getList('id', 'title'),[
                                    'multiple'=>'multiple',
                                    'class' => 'form-control form-control-solid',
                                    'style'=>'width:100%; height:200px;'
                                ])->label('Categories:');
                            ?>
                        </div>

                    </div>
                    <div class="form-group" style="text-align: center; padding: 25px 0px 0px 15px;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px']) ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Main picture</h3>
                    <div class="form-group">
                        <div class="image-input image-input-outline">
                            <?php
                            echo \wbp\imageUploader\ImageUploader::widget([
                                'style' => 'estoreMultiple',
                                'data' => ['size' => '123x123'],
                                'type' => Exercises::$imageTypes[0],
                                'item_id' => $formModel->id,
                                'limit' => 1
                            ]);
                            ?>
                        </div>
                        <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>
                        <div class="form-group" style="text-align: left; padding: 25px 0px 0px 15px;">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px']) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1"></div>
        </div>
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div class="my-5">
                    <hr />
                    <h3 class="text-dark font-weight-bold mb-10" style="text-align: center; padding: 30px 0px 20px 0px;">Text informations + SEO</h3>
                    <?= $form->field($formModel, 'text',[
                        'template' => '<label class="control-form-label col-sm-2">Main text:</label><div class="col-sm-12">{input}</div>',
                    ])
                        ->textarea(['class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
                    <?= $form->field($formModel, 'seo_title',[
                        'template' => '<label class="control-form-label col-sm-2">SEO Title:</label><div class="col-sm-12">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
                    <?= $form->field($formModel, 'seo_description',[
                        'template' => '<label class="control-form-label col-sm-2">SEO Description:</label><div class="col-sm-12">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
                    <?= $form->field($formModel, 'seo_keywords',[
                        'template' => '<label class="control-form-label col-sm-2">SEO Keywords:</label><div class="col-sm-12">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
                    <div class="form-group" style="text-align:center; margin-top: 25px;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
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