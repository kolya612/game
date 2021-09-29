<?php

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\assets\AppAsset;

$this->title = 'Login';

$bundle=AppAsset::register($this);

$this->registerCssFile($bundle->baseUrl.'/css/pages/login/login-1.css');
$this->registerJsFile(
    $bundle->baseUrl.'/js/pages/custom/login/login-general.js',
    ['depends' => [AppAsset::class]]
);

?>

<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div class="login-aside d-flex flex-column flex-row-auto" style="background-color:#000; background-image: url('<?=$bundle->baseUrl?>/media/bg/screen_login.jpg');">
            <!--begin::Aside Top-->
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <!--begin::Aside header-->
                <a href="" class="text-center mb-15">
                    <img src="<?=$bundle->baseUrl?>/media/logos/logo_login.png" class="max-h-100px" alt="" />
                </a>
                <!--end::Aside header-->

            </div>
            <!--end::Aside Top-->
            <!--begin::Aside Bottom-->
<!--            <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/illustrations/login-visual-1.svg)"></div>-->
            <!--end::Aside Bottom-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-center">
                <!--begin::Signin-->
                <div class="login-form login-signin">

                    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                        <!--begin::Title-->
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to VIP Portal Admin Panel</h3>
                        </div>
                        <!--begin::Title-->

                        <!--begin::Form group-->
                        <?= $form->field($model, 'username')
                            ->textInput(['class'=>'form-control form-control-solid h-auto py-6 px-6 rounded-lg'])
                            ->label(null,['class'=>'font-size-h6 font-weight-bolder text-dark'])
                        ?>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <?= $form->field($model, 'password')
                            ->passwordInput(['class'=>'form-control form-control-solid h-auto py-6 px-6 rounded-lg'])
                            ->label(null,['class'=>'font-size-h6 font-weight-bolder text-dark'])
                        ?>
                        <!--end::Form group-->

                        <?= $form->field($model, 'rememberMe')->checkbox() ?>

                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">
                            <button type="submit"  class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                        </div>
                        <!--end::Action-->

                    <?php ActiveForm::end(); ?>

                </div>
                <!--end::Signin-->
            </div>
            <!--end::Content body-->
            <!--begin::Content footer-->
            <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                    <span class="mr-1"><?=date("Y")?>©</span>
                    <a href="https://www.emblazeone.com/" target="_blank" class="text-dark-75 text-hover-primary">Emblaze One, Inc. All Rights Reserved.</a>
                </div>
            </div>
            <!--end::Content footer-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->