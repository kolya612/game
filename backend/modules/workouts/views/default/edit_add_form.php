<?php

use backend\modules\workouts\models\Workouts;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\workouts\models\Workouts */
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
                                    ->field($formModel,'phase',[])
                                    ->dropDownList(\common\models\Data::PHASE,[
                                        'class' => 'form-control form-control-solid'
                                    ])
                                    ->label('Phase:')
                                ?>
                        </div>
                        <div class="col-xl-11">
                            <?=$form
                                ->field($formModel,'gender',[])
                                ->dropDownList(\common\models\Data::GENDER,['class' => 'form-control form-control-solid'])
                                ->label('Gender:');
                            ?>
                        </div>
                        <div class="col-xl-11">
                            <?=$form
                                ->field($formModel,'goal',[])
                                ->dropDownList(\common\models\Data::GOAL,['class' => 'form-control form-control-solid'])
                                ->label('Goal:');
                            ?>
                        </div>

                        <div class="col-xl-11">
                            <?=$form
                                ->field($formModel,'workout_often',[])
                                ->dropDownList(\common\models\Data::WORKOUT_OFTEN,['class' => 'form-control form-control-solid'])
                                ->label('Workout often:');
                            ?>
                        </div>

                        <div class="col-xl-11">
                            <?=$form
                                ->field($formModel,'exercisesIds',[])
                                ->dropDownList(\backend\modules\exercises\models\Exercises::getList('id', 'title','id'),[
                                    'multiple'=>'multiple',
                                    'class' => 'form-control form-control-solid',
                                    'style'=>'width:100%; height:200px;'
                                ])->label('Exercises:');
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
                    <h3 class=" text-dark font-weight-bold mb-10" style="text-align: center; padding: 0px 0px 30px 0px;">Sale information</h3>
                    <?= $form->field($formModel, 'price',[
                        'template' => '<label class="control-form-label col-sm-4">Price:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
                    <?= $form->field($formModel, 'sale_price',[
                        'template' => '<label class="control-form-label col-sm-4">Sale price:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
                    <?= $form->field($formModel, 'percent',[
                        'template' => '<label class="control-form-label col-sm-4">Percent <br />for sale:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
                    <div class="form-group" style="text-align: center; padding: 25px 0px 0px 15px;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px']) ?>
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
                    <?= $form->field($formModel, 'short_text',[
                        'template' => '<label class="control-form-label col-sm-2">Short text:</label><div class="col-sm-12">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(false)
                    ?>
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

        <div class="row">
            <div class="col-xl-4">

                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10" style="text-align: center; padding: 30px 0px 0px 0px;">Main picture</h3>
                    <div class="form-group" style="text-align: center;">
                        <div class="image-input image-input-outline">
                            <?php
                            echo \wbp\imageUploader\ImageUploader::widget([
                                'style' => 'estoreMultiple',
                                'data' => ['size' => '123x123'],
                                'type' => Workouts::$imageTypes[0],
                                'item_id' => $formModel->id,
                                'limit' => 1
                            ]);
                            ?>
                        </div>
                        <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>
                        <div class="form-group" style="text-align: center; padding: 25px 0px 0px 15px;">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px']) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10" style="text-align: center; padding: 30px 0px 0px 0px;">PDF picture</h3>
                    <div class="form-group" style="text-align: center;">
                        <div class="image-input image-input-outline">
                            <?php
                            echo \wbp\imageUploader\ImageUploader::widget([
                                'style' => 'estoreMultiple',
                                'data' => ['size' => '123x123'],
                                'type' => Workouts::$imageTypes[1],
                                'item_id' => $formModel->id,
                                'limit' => 1
                            ]);
                            ?>
                        </div>
                        <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: png, jpg, jpeg.</span>
                        <div class="form-group" style="text-align: center; padding: 25px 0px 0px 15px;">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px']) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10" style="text-align: center; padding: 30px 0px 0px 0px;">PDF file</h3>
                    <div class="form-group" style="text-align: center;">
                        <div class="image-input image-input-outline">
                            <?php
                            echo \wbp\fileUploader\fileUploader::widget([
                                'style' => 'estoreMultiple',
                                'data' => ['size' => '123x123'],
                                'type' => Workouts::$fileTypes[0],
                                'item_id' => $formModel->id,
                                'limit' => 1
                            ]);
                            ?>
                        </div>
                        <span class="form-text text-muted" style="padding-left: 30px;">Allowed file types: pdf.</span>
                        <div class="form-group" style="text-align: center; padding: 25px 0px 0px 15px;">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end::Form-->
    </div>
</div>

<?php ActiveForm::end(); ?>