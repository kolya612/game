<?php

use yii\widgets\ListView;

$bundle=\frontend\assets\AppAsset::register($this);

$this->registerJs('
        $(document).on("change", ".categorySelector", function(){
            if($(this).prop("checked")){
                $("#selectedCategories").append("<span class=\'span_tag\' data-id=\'"+$(this).val()+"\'>"+$(this).data("title")+"</span>");
            }else{
                $(".span_tag[data-id="+$(this).val()+"]").remove();
            }
            
            reloadPjax();
        });
        $(document).on("click", ".span_tag[data-id]", function(){
            $(this).remove();
            $("#defaultCheck"+$(this).data("id")).prop("checked",false);
        
            reloadPjax();
            
            return false;
        });
        
        function reloadPjax(){
            $.pjax.reload({
                container:"#exercises", 
                url: "'.\yii\helpers\Url::to(['index']).'",  
                data: $("#search").serialize()
            });
        }
        
        $("#search").submit(function(){
            reloadPjax();
            return false;
        });
    ', \yii\web\View::POS_END);
?>


<section class="header-board pp">
    <div class="container">
        <div class="header-board__top">
            <h1 class="title">Exercise Videos</h1>
        </div>
        <p class="text">Each video shows you how to achieve the best results for your workout plan.</p>
    </div>
</section>

<section class="dashboard">
    <div class="container">
        <div class="row">
            <div class="col-12 filters_search">
                <? $form=\yii\widgets\ActiveForm::begin(['action'=>['index'], 'id'=>'search', 'method'=>'GET', 'options'=>['class'=>'form-inline']]); ?>
                    <?=$form->field($searchModel, 'search',[
                        'template'=>"
                                {input}
                                <button class=\"btn\" type=\"submit\"><i class=\"fas fa-search\"></i></button>
                                {hint}\n{error}
                            "
                    ])->textInput(["placeholder"=>"Search"])->label(false)?>

                    <div class="dropdown ml-3">
                        <button class="btn filter_in dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-plus"></i> Filter
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?
                                foreach ($categories as $category){
                            ?>
                                    <div class="form-check">
                                        <label for="defaultCheck<?=$category->id?>" class="checkbox path">
                                            <input class="categorySelector" id="defaultCheck<?=$category->id?>" <? if(in_array($category->id, $searchModel->categories)) echo "checked=checked";?> name="ExercisesSearchModel[categories][]" value="<?=$category->id?>" type="checkbox" data-title="<?=$category->title?>">
                                            <svg viewBox="0 0 21 21"><path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path></svg>
                                            <span><?=$category->title?></span>
                                        </label>
                                    </div>

                            <?
                                }
                            ?>
                        </div>
                    </div>
                    <div class="tags_filters pt-5 pb-3" id="selectedCategories">
                        <?
                            foreach ($categories as $category){
                                if(!in_array($category->id, $searchModel->categories)) continue;
                        ?>
                                <span class="span_tag" data-id="<?=$category->id?>">
                                    <?=$category->title?>
                                </span>
                        <?  } ?>
                    </div>
                <? \yii\widgets\ActiveForm::end(); ?>
            </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-12">
                <? \yii\widgets\Pjax::begin(['id'=>'exercises']); ?>
                    <? if($recentlyDataProvider && $recentlyDataProvider->getTotalCount()){ ?>
                        <h4 class="mb-2 mt-0 mb-sm-4 mb-sm-5">Recently Watched</h4>

                        <?
                        echo ListView::widget([
                            'dataProvider' => $recentlyDataProvider,
                            'options'=>[
                                'class'=>' owl-carousel slide-four',
                            ],
                            'itemOptions' => ['tag'=>'div','class'=>''],
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
                    }
                    ?>

                    <h4 class="mb-2 mt-0 mb-sm-4 mb-sm-5">
                        <? if($loaded){?>Results<? }else{ ?>All Videos<? } ?>
                    </h4>
                    <?
                        echo ListView::widget([
                            'dataProvider' => $dataProvider,
                            'options'=>[
                                'class'=>'row',
                            ],
                            'itemOptions' => ['tag'=>'div','class'=>'all-video__item mb-3 col-6 col-sm-6 col-md-6 col-lg-4'],
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
