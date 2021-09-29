<?php
    $bundle=\frontend\assets\AppAsset::register($this);

    $this->registerJs("
        $(document).on('click','.change-popup-m',function(){
            var modalSelector='#meal_popup_'+$(this).data('id');
            if($(modalSelector).length){
                $(modalSelector).modal('show');
            }else{
                $.ajax({url: '".\yii\helpers\Url::to(['meal-plan/get-change-popup'])."',data:{'id':$(this).data('id')},method:'GET',success: function(html){
                    $('body').append(html);
                    $(modalSelector).modal('show');
                }})
            }
        });
    ", \yii\web\View::POS_END,'change-meal-popup');
?>

<!-- -->
<div class="block_plan change-popup-m" data-id="<?=$model->id?>">
    <div class="description">
        <span class="check">
            <img src="<?=$bundle->baseUrl?>/assets/Icon.svg" alt=""/>
        </span>
        <div class="bottom_d">
            <h3><?=$model->title?></h3>
            <span class="phase <?php if($model->phase==2) echo 'green';?>">Phase <?=$model->phase?></span>
        </div>
    </div>
    <div class="block_post_blue"></div>
    <img src="<?=$model->image->getUrl()?>" alt=""/>
</div>
<!-- -->
