<?php

use yii\widgets\ListView;

$bundle=\frontend\assets\AppAsset::register($this);
?>
<section class="my-account">
    <a class="drop-btn" id="account-menu-drop-btn" href="#">My Profile</a>

    <div class="container">
        <div class="row">

            <?=$this->render('../elements/setting-menu',['active'=>'physical-orders'])?>

            <div class="col-12 col-lg-9">
                <div class="tab-content" id="pills-tabContent">

                    <div class="physical-orders pp tab-pane fade show active" id="physical-orders" role="tabpanel"
                         aria-labelledby="pills-contact-tab">

                        <div class="my-account__content-wrapper">
                            <h1 class="my-account__title">Physical Orders</h1>

                            <?
                                echo ListView::widget([
                                    'dataProvider' => $dataProvider,
                                    'options'=>[],
                                    'itemOptions' => false,
                                    'layout' => '
                                        {items}
                                        {pager}
                                    ',
                                    'itemView' => function ($model, $key, $index, $widget) {
                                        return $this->render('../elements/physical-item',['model' => $model]);
                                    }
                                ]);
                            ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
