<?php
    $bundle=\frontend\assets\AppAsset::register($this);

    $this->registerJs("
        $(document).on('click','.change-popup',function(){
            var modalSelector='#workout_popup_'+$(this).data('id');
            if($(modalSelector).length){
                $(modalSelector).modal('show');
            }else{
                $.ajax({url: '".\yii\helpers\Url::to(['workout-plan/get-change-popup'])."',data:{'id':$(this).data('id')},method:'GET',success: function(html){
                    $('body').append(html);
                    $(modalSelector).modal('show');
                }})
            }
        });
    ", \yii\web\View::POS_END,'change-workout-popup');
?>

<!-- -->
<div class="block_plan change-popup" data-id="<?=$model->id?>">
    <div class="description">
        <span class="check">
            <img src="<?=$bundle->baseUrl?>/assets/Group.svg" alt=""/>
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
