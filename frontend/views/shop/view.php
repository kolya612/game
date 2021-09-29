<?php

?>
<section class="header-board pp">
    <div class="container">
        <a class="return-link link-primary cancel-add-payment" href="<?=\yii\helpers\Url::to(['shop/index'])?>">Back</a>
        <div class="row main-card__product">
            <div class="col-12 col-md-12 col-sm-12 col-lg-8 ">
                <div class="owl-carousel slide-five">
                    <img src="<?=$supplement->image->getUrl()?>" alt="<?=$supplement->title?>"/>
                    <?php foreach ($supplement->getImages('supplement_gallery') as $image){ ?>
                        <img src="<?=$image->getUrl()?>" alt="<?=$supplement->title?>"/>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-4">
                <div class="description_video p-0">
                    <? foreach ($supplement->supcategories as $category){ ?>
                        <span class="categories_tag orange mt-0"><?=$category->title?></span>
                    <? } ?>
                </div>
                <h2 class="title_video title_supl">
                    <?=$supplement->title?>
                </h2>


                <div class="d-flex align-items-center supl_price">
                    <?=$this->render('../elements/supplement-item-price',['model' => $supplement]);?>
                </div>

                <div class="description_video p-0">
                    <p class="text">
                        <?=$supplement->text?>
                    </p>
                </div>

                <a href="<?=\yii\helpers\Url::to(['shop/supplement-to-cart','id'=>$supplement->id])?>" class="btn continue">Shop Now</a>

                <div class="tabs_suppliment">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#description">Benefits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#characteristics">Ingredients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#opinion">Nutrition Facts</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="description">
                            <?=$supplement->benefits?>
                        </div>
                        <div class="tab-pane fade" id="characteristics">
                            <?=$supplement->ingredients?>
                        </div>
                        <div class="tab-pane fade" id="opinion">
                            <?=$supplement->nutrition_facts?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-12">
            <? if(isset($recomended) && $recomended->count()) ?>
                <h4 class="mb-5 mt-5">Recommended For You</h4>
                <div class="row">
                    <? foreach ($recomended->all() as $model){ ?>
                        <div class="recommended-card col-6 col-md-6 col-sm-6 col-lg-3">
                            <?=$this->render('../elements/supplement-item',['model'=>$model])?>
                        </div>
                    <? } ?>
                </div>
            </div>
        </div>
    </div>
</section>
