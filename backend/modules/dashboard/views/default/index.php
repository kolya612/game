<?php
    $this->title = Yii::$app->controller->module->getSeoTitle();
?>

<?=$this->render('@backend/views/layouts/page_header',[
    'title'=>Yii::$app->controller->module->title,
    'breadcrumbs'=>[],
    'quickActions'=>[]
])?>

<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Dashboard-->
        <!--begin::Row-->
        <div class="row">
            <div class="col-6">
                <?=$this->render('widget_11',['count'=>$viewsCount])?>
            </div>
            <div class="col-6">
                <?=$this->render('widget_12',['count'=>$membersCount])?>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?=$this->render('widget_4',['members'=>$members])?>
            </div>
        </div>
        <!--end::Row-->
        <!--end::Dashboard-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->
