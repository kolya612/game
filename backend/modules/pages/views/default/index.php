<?php

use yii\widgets\ListView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\mecategories\models\SearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::$app->controller->module->getSeoTitle();

?>

<?=$this->render('@backend/views/layouts/page_header',[
    'title'=>Yii::$app->controller->module->title,
    'searchModel'=>$searchModel,
    'dataProvider'=>$dataProvider,
    'breadcrumbs'=>[],
    'quickActions'=>[]
])?>


<!--begin::Entry-->
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">

            <div class="card-body">
                <?
                Pjax::begin(['id' => 'listView', 'options' => ['class' => 'pjax-container']]);

                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'summary' => '<div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite"> Showing {begin} - to {end} entries</div>',
                    'itemOptions' => ['tag'=>'tr','class'=>'selectable'],
                    'pager'=> [
                        'class'=>\yii\widgets\LinkPager::className(),
                        'options'=>[
                            'class'=>'pagination'
                        ]
                    ],
                    'layout' => '<table class="table table-separate table-head-custom table-checkable" id="kt_datatable">                                        
                                            <thead>
                                                <tr>
                                                    <!--<th style="width: 1%;" class="center">ID</th>-->
                                                    <th>#</th>
                                                    <th>Title</th>
                                                    <th style="width: 150px; text-align: center;">HREF</th>
                                                    <th style="width: 15%; text-align: center;" class="center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {items}
                                            </tbody>
                                        </table>
                                        <div class="row">
                                            <div class="col-sm-12 col-md-5">
                                                {summary}
                                            </div>
                                            <div class="col-sm-12 col-md-7">
                                                <div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_paginate">
                                                    {pager}
                                                </div>
                                            </div>
                                        </div>',
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('_listItem',['model' => $model]);
                    }
                ]);

                Pjax::end();
                ?>
            </div>
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->