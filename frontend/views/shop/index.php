<?php
    use yii\widgets\ListView;
?>


<section class="header-board pp">
    <div class="container">
        <div class="header-board__top">
            <h1 class="title">Shop Nutrition</h1>
        </div>
        <p class="text">Fuel your body with nutrients that will elevate your workout and help you maximize your goals. </p>
    </div>
</section>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                <?
                if(isset($recomended) && $recomended->count()) { ?>
                    <h4 class="mb-5 mt-5">Recommended For You</h4>
                    <div class="row">
                        <? foreach ($recomended->all() as $model){ ?>
                            <div class="recommended-card col-12 col-md-6 col-sm-6 col-lg-3">
                                <?=$this->render('../elements/supplement-item',['model'=>$model])?>
                            </div>
                        <? } ?>
                    </div>
                <?php } ?>

                <?php
                    if($dataProvider->query->all()){
                ?>
                    <h4 class="mb-5 mt-3">Explore More</h4>
                    <?
                        echo ListView::widget([
                            'dataProvider' => $dataProvider,
                            'options'=>[
                                'class'=>'row',
                            ],
                            'itemOptions' => ['tag'=>'div','class'=>'col-12 col-md-6 col-sm-6 col-lg-3'],
                            'layout' => '
                            {items}
                            {pager}
                        ',
                            'itemView' => function ($model, $key, $index, $widget) {
                                return $this->render('../elements/supplement-item',['model' => $model]);
                            }
                        ]);
                    ?>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</section>
