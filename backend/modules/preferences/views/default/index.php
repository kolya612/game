<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\supplements\models\Supplements */
/* @var $form yii\bootstrap4\ActiveForm */

$this->title=Yii::$app->controller->module->getSeoTitle();
?>
<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Edit preference</h5>
            <!--end::Page Title-->
            <div class="d-flex align-items-center" id="kt_subheader_search">
            </div>
        </div>
        <!--end::Info-->
    </div>
</div>

<section class="page-content container-fluid">

<?php
$form = ActiveForm::begin(['layout' => 'horizontal', 'id'=>'add-edit-form']);
?>
<input type="hidden" name="action-after-save" value="edit" />

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Settings</h3>
                    <div class="row">
                        <? foreach ($params as $name=>$param){ ?>
                            <div class="col-md-6">
                                <?=$form->field($param['model'], 'value', [
                                        'template' => '<label class="control-form-label col-sm-3">' . $param['label'] . ':</label><div class="col-sm-8">{input}</div>',
                                    ])
                                    ->textInput(['name'=>'ConfigPar['.$name.']','class' => 'form-control form-control-solid'])
                                    ->label(false)
                                ?>
                            </div>
                        <? } ?>
                    </div>
                    <div class="form-group" style="text-align:center;">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success','style'=>'width:200px; margin-top: 50px;']) ?>
                    </div>
                </div>
                <div class="separator separator-dashed my-10"></div>
            </div>
            <div class="col-xl-1"></div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

</section>
