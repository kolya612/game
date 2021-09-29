<?php
    use yii\widgets\ListView;
?>



<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                <?

                    if($recentlyWatched && $recentlyWatched->getTotalCount()){ ?>
                        <h4 class="mb-2 mt-0 mb-sm-4 mb-sm-5">Recently Watched</h4>

                        <?
                        echo ListView::widget([
                            'dataProvider' => $recentlyWatched,
                            'options'=>[
                                'class'=>' owl-carousel slide-four',
                            ],
                            'itemOptions' => ['tag'=>'div','class'=>' '],
                            'layout' => '
                                        {items}
                                        {pager}
                                    ',
                            'itemView' => function ($model, $key, $index, $widget) {
                                return $this->render('../elements/video-block',['model' => $model]);
                            }
                        ]);
                    }
                ?>

            </div>
        </div>
    </div>
</section>
