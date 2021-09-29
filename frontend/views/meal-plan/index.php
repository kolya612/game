<?php
    $bundle=\frontend\assets\AppAsset::register($this);
?>


<section class="header-board pp">
    <div class="container">
        <div class="header-board__top">
            <h1 class="title">My Meal Plan</h1>
        </div>
        <p class="text">Meal plans provide the nutritional tools needed to complement your workouts. </p>
    </div>
</section>

<section class="dashboard my-plans">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                <?php if ($myPlans) { ?>
                    <h4 class="mb-sm-5 mt-sm-5">Your Plans</h4>
                    <div class="row work_plan">
                        <? foreach ($myPlans as $model){ ?>
                            <div class="col-12 col-md-8 col-sm-8 mb-sm-3 col-lg-5">
                                <?=$this->render('../elements/my-meal-list-item',['model'=>$model->plan])?>
                            </div>
                        <? } ?>
                    </div>
                <?php } else { ?>
                    <h4 class="mb-sm-5 mt-sm-5">Your Have No Plans Yet</h4>
                <?php } ?>
                <?php if($otherPlans){ ?>
                    <h4 class="mb-2 mt-5">Other Plans You Might Like</h4>
                    <p class="text text__width mb-4">
                        Note: Your current plan allows you to change meal plan a maximum of one time monthly.
                        Upgrade your plan, or add programs to your VIP portal by choosing a plan below.
                    </p>
                    <div class=" owl-carousel slide-three">
                        <? foreach ($otherPlans as $model){ ?>
                            <div class="some_col">
                                <?=$this->render('../elements/meal-list-item',['model'=>$model,'changePopup'=>true])?>
                            </div>
                        <? } ?>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
