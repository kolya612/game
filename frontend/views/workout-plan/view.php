<?php
    use yii\widgets\ListView;
?>

<section class="header-board pp">
    <div class="container">
        <div class="header-board__top">
            <h1 class="title"><?=$model->title?></h1>
        </div>
        <p class="text"><?=$model->text?></p>
    </div>
</section>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                <? \yii\widgets\Pjax::begin(['id'=>'exercises']); ?>

                <h4 class="mb-5 mt-3">
                    Workout Videos
                </h4>
                <?
                echo ListView::widget([
                    'dataProvider' => $dataProvider,
                    'options'=>[
                        'class'=>'row',
                    ],
                    'itemOptions' => ['tag'=>'div','class'=>'col-12 col-sm-6 col-md-4'],
                    //                            'pager'=> [
                    //                                'class'=>\yii\widgets\LinkPager::className(),
                    //                                'options'=>[
                    //                                    'class'=>'pagination'
                    //                                ]
                    //                            ],
                    'layout' => '
                                {items}
                                {pager}
                            ',
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('../elements/video-block',['model' => $model]);
                    }
                ]);
                ?>
                <? \yii\widgets\Pjax::end(); ?>
            </div>
        </div>
    </div>
</section>
