<?php
use backend\modules\members\models\Members;
use yii\widgets\ActiveForm;

$bundle=\frontend\assets\AppAsset::register($this);
?>
<section class="my-account">
    <a class="drop-btn" id="account-menu-drop-btn" href="#">My Profile</a>
    <div class="container">
        <div class="row">

            <?=$this->render('../elements/setting-menu',['active'=>'index'])?>

            <div class="col-12 col-lg-9">
                <div class="tab-content" id="pills-tabContent">

                    <div class="my-profile pp tab-pane fade show active" id="my-profile" role="tabpanel"
                         aria-labelledby="pills-home-tab">
                        <?php
                            $form = ActiveForm::begin(['id'=>'add-edit-form']);
                        ?>
                            <div class="row flex-column-reverse flex-lg-row">

                                <div class="col-12 col-lg-8">
                                    <div class="my-account__content-wrapper">

                                        <h1 class="my-account__title">My Profile</h1>

                                        <?= $form->field($formModel, 'first_name',)->textInput(['maxlength' => true])?>
                                        <?= $form->field($formModel, 'last_name',)->textInput(['maxlength' => true])?>
                                        <?=$form
                                            ->field($formModel,'goal')
                                            ->dropDownList(\common\models\Data::GOAL,['class' => 'form-control']);
                                        ?>
                                        <?=$form
                                            ->field($formModel,'gender')
                                            ->dropDownList(Members::GENDER,['class' => 'form-control form-control-solid']);
                                        ?>


                                        <div class="weight-data-group">
                                            <div class="row">
                                                <div class="col-6">
                                                    <?= $form->field($formModel, 'height',[
                                                            'template' => '{label}<div class="row-text">{input}<span class="form-group__text">ft</span></div>{hint}{error}',
                                                        ])
                                                        ->textInput(['maxlength' => true, 'class' => 'form-control text-right']);
                                                    ?>
                                                </div>
                                                <div class="col-6">
                                                    <?= $form->field($formModel, 'height_in',[
                                                        'template' => '{label}<div class="row-text">{input}<span class="form-group__text">in</span></div>{hint}{error}',
                                                    ])
                                                        ->textInput(['maxlength' => true, 'class' => 'form-control text-right']);
                                                    ?>
                                                </div>
                                                <div class="col-6">
                                                    <?= $form->field($formModel, 'weight',[
                                                        'template' => '{label}<div class="row-text">{input}<span class="form-group__text">lbs</span></div>{hint}{error}',
                                                    ])
                                                        ->textInput(['maxlength' => true, 'class' => 'form-control text-right']);
                                                    ?>
                                                </div>
                                                <div class="col-6">
                                                    <?= $form->field($formModel, 'goal_weight',[
                                                        'template' => '{label}<div class="row-text">{input}<span class="form-group__text">lbs</span></div>{hint}{error}',
                                                    ])
                                                        ->textInput(['maxlength' => true, 'class' => 'form-control text-right']);
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="btn btn-primary w-100 disabled" id="add-edit-form-button" type="submit" disabled>Save</button>

                                    </div>
                                </div>

                                <div class="col-12 col-lg-4 d-flex justify-content-center justify-content-lg-end">
                                    <div class="edit-photo">
                                        <div class="image-input image-input-outline" id="kt_image_1">

                                            <?php
                                            echo \wbp\imageUploader\ImageUploader::widget([
                                                'style' => 'vipportal',
                                                'data' => ['size' => '190x190'],
                                                'buttonText1'=>'Upload Image',
                                                'type' => Members::$imageTypes[0],
                                                'item_id' => $formModel->id,
                                                'limit' => 1
                                            ]);
                                            ?>

                                        </div>
                                        <span class="has-img-error" id="image_download_error"></span>
                                    </div>
                                </div>
                            </div>
                        <?php ActiveForm::end(); ?>
                        <?php
                            $this->registerJs("
                                $('#add-edit-form').change(function(){
                                    $('#add-edit-form-button').removeClass('disabled');
                                    $('#add-edit-form-button').prop('disabled', false);
                                });
                            ", \yii\web\View::POS_END);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
