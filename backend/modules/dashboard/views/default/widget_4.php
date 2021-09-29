<?php

?>

<!--begin::Advance Table Widget 4-->
<div class="card card-custom card-stretch gutter-b">
    <!--begin::Header-->
    <div class="card-header border-0 py-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Latest registered members</span>
        </h3>
        <div class="card-toolbar">
            <a href="<?=\yii\helpers\Url::to(['/members/default/add'])?>" class="btn btn-info font-weight-bolder font-size-sm">Create new Member</a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-0 pb-3">
        <div class="tab-content">
            <!--begin::Table-->
            <div class="table-responsive">
                <table class="table table-head-custom table-head-bg table-borderless table-vertical-center">
                    <thead>
                    <tr class="text-left text-uppercase">
                        <th style="min-width: 250px" class="pl-7">
                            <span class="text-dark-75">Name</span>
                        </th>
                        <th style="min-width: 100px">Gender</th>
                        <th style="min-width: 100px">Goal</th>
                        <th style="min-width: 100px">Age</th>
                        <th style="min-width: 80px"></th>
                    </tr>
                    </thead>
                    <tbody>
                        <? foreach ($members as $member){ ?>
                            <tr>
                                <td class="pl-0 py-8">
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-50 symbol-light mr-4">
                                            <span class="symbol-label">
                                                <? if($member->image){ ?>
                                                    <img src="<?=$member->image->getUrl()?>" class="h-75 align-self-end" alt="" />
                                                <? } ?>
                                            </span>
                                        </div>
                                        <div>
                                            <a href="<?=\yii\helpers\Url::to(['/members/default/edit','id'=>$member->id])?>" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg"><?=$member->name?></a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?=$member->getGenderName()?></span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?=$member->getGoalTitle()?></span>
                                </td>
                                <td>
                                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg"><?=$member->age?></span>
                                </td>
                                <td class="pr-0 text-right">
                                    <a href="<?=\yii\helpers\Url::to(['/members/default/edit','id'=>$member->id])?>" class="btn btn-light-success font-weight-bolder font-size-sm">Edit</a>
                                </td>
                            </tr>
                        <? } ?>

                    </tbody>
                </table>
            </div>
            <!--end::Table-->
        </div>
    </div>
    <!--end::Body-->
</div>
<!--end::Advance Table Widget 4-->
