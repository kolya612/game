<?php

use common\models\User;
use wbp\dumper\Dumper;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model backend\modules\members\models\Members */
/* @var $form yii\bootstrap4\ActiveForm */

$form = ActiveForm::begin(['layout' => 'horizontal', 'id'=>'owners-form']);

?>
<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <!--begin::Form-->
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-7">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Main informations</h3>
                    <?= $form->field($formModel, 'status',[
                        'options' => ['class' => 'row form-group'],
                        'template' => '<label class="col-3 col-form-label">Status (ON/OFF)</label>
                                                    <div class="col-8">
                                                            <span class="switch">
                                                                <label>{input}<span></span></label>
                                                            </span>
                                                    </div>',
                    ])->checkbox([
                        'value'=>User::STATUS_ACTIVE,
                        'uncheck'=>User::STATUS_INACTIVE,
                        'checked '=>$formModel->status==User::STATUS_ACTIVE?true:false,
                        'label'=>false,
                    ], false)
                        ->label(null, ['class'=>'control-form-label col-sm-3','style'=>'font-weight:400!important'])
                    ?>
                    <?= $form->field($formModel, 'first_name',[
                        'template' => '<label class="control-form-label col-sm-3">First name:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'last_name',[
                        'template' => '<label class="control-form-label col-sm-3">Last name:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'email',[
                        'template' => '<label class="control-form-label col-sm-3">EMail:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'phone',[
                        'template' => '<label class="control-form-label col-sm-3">Phone:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'username',[
                        'template' => '<label class="control-form-label col-sm-3">Login:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'password',[
                        'template' => '<label class="control-form-label col-sm-3">Password:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <div class="form-group" style="text-align:center; margin-top: 25px;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
            </div>
            <div class="col-xl-3">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Logo</h3>
                    <div class="form-group">
                        <div class="image-input image-input-outline" id="kt_image_1">
                            <?php
                            echo \wbp\imageUploader\ImageUploader::widget([
                                'style' => 'estoreMultiple',
                                'data' => ['size' => '123x123'],
                                'type' => \backend\modules\employees\models\Employees::$imageTypes[0],
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
                    <div class="separator separator-dashed my-10"></div>
                </div>
            </div>
            <div class="col-xl-1"></div>
        </div>
        <!--end::Form-->
    </div>
</div>

<?php ActiveForm::end(); ?>
