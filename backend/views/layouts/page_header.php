<?php
/**
 * @var $title string
 * @var $title string
 *
 */

use yii\helpers\Url;

?>
<? $form=\yii\widgets\ActiveForm::begin(['method'=>'GET', 'action'=>['index']]); ?>
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5"><?=$title?></h5>
                <!--end::Page Title-->



                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <?
                        if(isset($breadcrumbs)) foreach ($breadcrumbs as $breadcrumb){
                            ?>
                            <li class="breadcrumb-item text-muted"><a href="<?=\yii\helpers\Url::to($breadcrumb['url'])?>" class="text-muted" <?=isset($breadcrumb['options'])?$breadcrumb['options']:''?> ><?=$breadcrumb['label']?></a></li>
                            <?
                        }
                    ?>
                </ul>
                <!--end::Breadcrumb-->



                    <? if($searchModel || $dataProvider){ ?>
                        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-5 bg-gray-200"></div>
                    <? } ?>
                    <div class="d-flex align-items-center" id="kt_subheader_search">
                        <? if($dataProvider){ ?>
                            <span class="text-dark-50 font-weight-bold" id="kt_subheader_total"><?=$dataProvider->getTotalCount()?> Total</span>
                        <? } ?>
                        <? if($searchModel && property_exists($searchModel,'search')){ ?>
                            <div class="ml-5">
                                <div class="input-group input-group-sm input-group-solid" style="max-width: 175px">
                                    <?=$form
                                        ->field($searchModel,'search',[
                                                'options'=>['class'=>'input-group input-group-sm input-group-solid'],
                                                'template' => '
                                                    {input}
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">
                                                            <span class="svg-icon">
                                                                <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                                        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                                        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path>
                                                                    </g>
                                                                </svg>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <!--<i class="flaticon2-search-1 icon-sm"></i>-->
                                                        </span>
                                                    </div>
                                                '
                                        ])
                                        ->textInput(['placeholder'=>"Search..."])
                                    ?>
<!--                                    <input type="text" class="form-control" id="kt_subheader_search_form" placeholder="Search...">-->

                                </div>
                            </div>
                        <? } ?>
                    </div>
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">

                <? if(Yii::$app->controller->module->hasAddAction()){ ?>
                    <a href="<?=Url::to(['add'])?>" class="btn btn-light-primary font-weight-bold ml-2"><?=Yii::$app->controller->module->addButtonTitle?></a>
                <? } ?>

                <? if(Yii::$app->controller->action->id=='add' || Yii::$app->controller->action->id=='edit'){ ?>
                    <!--begin::Button-->
                    <a href="#" onclick="window.history.go(-1); return false;" class="btn btn-default font-weight-bold ml-2">Back</a>
                    <!--end::Button-->

                    <!--begin::Dropdown-->
                    <div class="btn-group ml-2">
                        <button type="button" onclick="$('#add-edit-form').submit();return false;" class="btn btn-primary font-weight-bold">Save Changes</button>
                        <button type="button" class="btn btn-primary font-weight-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                        <div class="dropdown-menu dropdown-menu-sm p-0 m-0 dropdown-menu-right" style="">
                            <ul class="navi py-5">
                                <li class="navi-item">
                                    <a href="#" onclick="$('[name=action-after-save]').val('edit');$('#add-edit-form').submit();return false;" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-writing"></i></span>
                                        <span class="navi-text">Save &amp; continue</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" onclick="$('[name=action-after-save]').val('add');$('#add-edit-form').submit();return false;" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-medical-records"></i></span>
                                        <span class="navi-text">Save &amp; add new</span>
                                    </a>
                                </li>
                                <li class="navi-item">
                                    <a href="#" onclick="$('[name=action-after-save]').val('logout');$('#add-edit-form').submit();return false;" class="navi-link">
                                        <span class="navi-icon"><i class="flaticon2-hourglass-1"></i></span>
                                        <span class="navi-text">Save &amp; exit</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end::Dropdown-->
                <? } ?>


                <? if($quickActions){ ?>
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
                        <a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="svg-icon svg-icon-success svg-icon-lg">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-plus.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                        <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </a>
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3" style="">
                            <!--begin::Navigation-->
                            <ul class="navi navi-hover py-5">
                                <? foreach ($quickActions as $quickAction){ ?>
                                    <li class="navi-item">
                                        <a href="<?=Url::to($quickAction['action'])?>" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="<?=$quickAction['icon']?>"></i>
                                            </span>
                                            <span class="navi-text"><?=$quickAction['label']?></span>
                                        </a>
                                    </li>
                                <? } ?>
                            </ul>
                            <!--end::Navigation-->
                        </div>
                    </div>
                    <!--end::Dropdown-->
                <? } ?>

            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
<?php \yii\widgets\ActiveForm::end(); ?>