<?php

use common\models\User;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\web\View;

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
                        </div></div>

                    <?= $form->field($formModel, 'first_name',[
                        'template' => '<label class="control-form-label col-sm-2">First name:</label><div class="col-sm-9">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'last_name',[
                        'template' => '<label class="control-form-label col-sm-2">Last name:</label><div class="col-sm-9">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'email',[
                        'template' => '<label class="control-form-label col-sm-2">EMail:</label><div class="col-sm-9">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'phone',[
                        'template' => '<label class="control-form-label col-sm-2">Phone:</label><div class="col-sm-9">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'username',[
                        'template' => '<label class="control-form-label col-sm-2">Login:</label><div class="col-sm-9">{input}</div>',
                    ])
                        ->textInput(['maxlength' => true, 'class' => 'form-control form-control-solid'])
                        ->label(null, ['class'=>'control-form-label col-sm-3'])
                    ?>
                    <?= $form->field($formModel, 'password',[
                        'template' => '<label class="control-form-label col-sm-2">Password:</label><div class="col-sm-9">{input}</div>',
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
                                    'type' => User::$imageTypes[0],
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
    </div>
</div>
<br /><br />
<div class="card card-custom card-sticky" id="kt_page_sticky_card">
    <div class="card-body">
        <div class="row">
            <div class="col-xl-1"></div>
            <div class="col-xl-10">
                <div class="my-5">
                    <h3 class=" text-dark font-weight-bold mb-10">Permissions</h3>
                    <table class="table table-separate table-head-custom table-checkable dataTable no-footer dtr-inline" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info">
                        <thead>
                            <tr>
                                <td>Model</td>
                                <td colspan="4">Permissions</td>
                            </tr>
                            <tr>
                                <td></td>
                                <?php
                                    $currentClass=Yii::$app->controller->module->className();
                                    $permissions = $currentClass::$module_actions;
                                    foreach ($permissions as $permission=>$value) {
                                        echo '<td><span class="one_coll" style="cursor: pointer;" data-status="1" data-permission="' . $permission . '">' . $permission . '</span></td>';
                                    }
                                ?>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $x = 0;
                                foreach(Yii::$app->modules as $moduleName => $module){
                                    if ((is_array($module) && mb_substr($module['class'],0,7,'UTF-8') == 'backend') || (isset($module->action) && mb_substr($module->action,0,7,'UTF-8') == '/admin/')) {
                                        ?>
                                        <tr>
                                            <td style="font-weight: 600; font-size: 1rem; color: #B5B5C3 !important; letter-spacing: 0.1rem">
                                                <?=$moduleName?>
                                            </td>
                                            <?php
                                                foreach ($permissions as $permission=>$value) {
                                                    $action=$value[0]['action'];
                                            ?>
                                                <td>
                                                    <input type="hidden" name="Employees[employeesPermissions][<?=$x?>][module]" value="<?=$moduleName?>">
                                                    <input type="hidden" name="Employees[employeesPermissions][<?=$x?>][controller]" value="Default">
                                                    <input type="hidden" name="Employees[employeesPermissions][<?=$x?>][permission]" value="<?=$permission?>">
                                                    <span class="switch switch-sm">
																<label>
                                                                    <input type="checkbox" class="val_<?=$permission?>  val_<?=$moduleName?>" name="Employees[employeesPermissions][<?=$x?>][action]" value="1"
                                                                        <?php
                                                                        $checker = $formModel->checkPermission($moduleName,"default",$permission);
                                                                        echo $checker==true ? 'checked="checked"' : '';
                                                                        ?>
                                                                    >
																	<span></span>
																</label>
															</span>

                                                    <?php $x++; ?>
                                                </td>
                                            <?php } ?>
                                            <td style="font-weight: 600; font-size: 1rem; color: #B5B5C3 !important; letter-spacing: 0.1rem"><span class="one_row" data-status_row="1" data-module="<?=$moduleName?>">ALL</span></td>
                                        </tr>
                                    <?php } ?>
                                <?php }
                            ?>
                        </tbody>
                    </table>
                    <?php
                    $this->registerJs("    
                                            $('.one_coll').on('click', function(e){
                                                e.preventDefault();
                                                let status = $(this).data('status');
                                                let permission = $(this).data('permission');                                      
                                                if(status == 1){
                                                    $('.val_' + permission).prop('checked', true);
                                                    $(this).data('status', 0);
                                                    let status = $(this).data('status');
                                                } else {
                                                    $('.val_' + permission).prop('checked', false);
                                                    $(this).data('status', 1);
                                                    let status = $(this).data('status');
                                                }
                                            })   
                                            $('.one_row').on('click', function(e){
                                                e.preventDefault();
                                                let status_row = $(this).data('status_row');
                                                let module = $(this).data('module');                                                                                     
                                                if(status_row == 1){
                                                    $('.val_' + module).prop('checked', true);
                                                    $(this).data('status_row', 0);
                                                    let status_row = $(this).data('status_row');
                                                } else {
                                                    $('.val_' + module).prop('checked', false);
                                                    $(this).data('status_row', 1);
                                                    let status_row = $(this).data('status_row');
                                                }
                                            })   
                                         ",
                        \yii\web\View::POS_END
                    );
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
