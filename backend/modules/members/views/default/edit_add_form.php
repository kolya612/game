<?php
use backend\modules\members\models\Members;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\members\models\Members */
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
                    <h3 class=" text-dark font-weight-bold mb-10">Main informations</h3>
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
                    <?=$form
                        ->field($formModel,'gender',[
                            'template' => '<label class="control-form-label col-sm-3">Gender:</label><div class="col-sm-8">{input}</div>',
                        ])
                        ->dropDownList(Members::GENDER,['class' => 'form-control form-control-solid'])
                        ->label(false);
                    ?>
                    <?= $form->field($formModel, 'email',[
                        'template' => '<label class="control-form-label col-sm-3">EMail:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'invitation_code',[
                        'template' => '<label class="control-form-label col-sm-3">Invitation code:</label><div class="col-sm-8">{input}</div>',

                    ])
                        ->passwordInput(['maxlength' => true, 'type' => 'text', 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'new_password',[
                        'template' => '<label class="control-form-label col-sm-3">New password:</label><div class="col-sm-8">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'type' => 'password', 'class' => 'form-control form-control-solid'])
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
                                    'type' => \backend\modules\members\models\Members::$imageTypes[0],
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
    </div>
</div>
<br /><br />
<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Addition informations</h3>
                    <div class="row">
                        <div class="col-xl-4">
                            <?= $form->field($formModel, 'age',[
                                'template' => '<label class="control-form-label col-sm-12">Age:</label><div class="col-sm-12">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(null, ['class'=>'control-form-label col-sm-3'])
                            ?>
                            <?= $form->field($formModel, 'height',[
                                'template' => '<label class="control-form-label col-sm-12">Height:</label><div class="col-sm-12">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(null, ['class'=>'control-form-label col-sm-3'])
                            ?>
                        </div>
                        <div class="col-xl-4">
                            <?=$form
                                ->field($formModel,'workout_often',[
                                    'template' => '<label class="control-form-label col-sm-12">Workout often:</label><div class="col-sm-12">{input}</div>',
                                ])
                                ->dropDownList(\common\models\Data::WORKOUT_OFTEN,['class' => 'form-control form-control-solid'])
                                ->label(false);
                            ?>
                            <?= $form->field($formModel, 'weight',[
                                'template' => '<label class="control-form-label col-sm-12">Weight:</label><div class="col-sm-12">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(null, ['class'=>'control-form-label col-sm-3'])
                            ?>
                        </div>
                        <div class="col-xl-4">
                            <?=$form
                                ->field($formModel,'goal',[
                                    'template' => '<label class="control-form-label col-sm-12">Goal:</label><div class="col-sm-12">{input}</div>',
                                ])
                                ->dropDownList(\common\models\Data::GOAL,['class' => 'form-control form-control-solid'])
                                ->label(false);
                            ?>
                            <?= $form->field($formModel, 'goal_weight',[
                                'template' => '<label class="control-form-label col-sm-12">Goal weight:</label><div class="col-sm-12">{input}</div>',
                            ])
                                ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                                ->label(null, ['class'=>'control-form-label col-sm-3'])
                            ?>
                        </div>
                    </div>
                    <div class="form-group" style="text-align:center; margin-top: 25px;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px;']) ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-1"></div>
        </div>
        <!--end::Form-->
    </div>
</div>

<?php ActiveForm::end(); ?>
