<?php


?>

<section class="header-board video-play pp">
    <div class="container">
        <a class="return-link link-primary cancel-add-payment" href="#" onclick="history.go(-1); return false;"><span>Back</span></a>
        <div class="row pt-5">
            <div class="col-12 col-md-8 col-sm-12 col-lg-8 ">
                <?
                    echo '<div id="video_player_'.$model->id.'"></div>';
                    $this->registerJs('
                        jwplayer("video_player_'.$model->id.'").setup({ 
                            "playlist": [{
                                "file": "'.$model->video.'",
                                "image": "'.$model->image->getUrl().'"
                            }]
                        });
                    ', \yii\web\View::POS_END);
                ?>
<!--                <video width="100%" controls="controls" poster="images/Video_Block.png">-->
                    <!--                    <source src="images/Video_Block.png" type='video/ogg; codecs="theora, vorbis"'>-->
                    <!--                    <source src="images/Video_Block.png" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>-->
                    <!--                    <source src="images/Video_Block.png" type='video/webm; codecs="vp8, vorbis"'>-->
<!---->
<!--                </video>-->
            </div>
            <div class="col-12 col-md-4 col-sm-12 col-lg-4">
                <h2 class="title_video">
                    <?=$model->title?>
                </h2>
                <div class="time_big_vid"><?=$model->time?></div>
                <div class="description_video p-0">
                    <? foreach ($model->excategories as $category){ ?>
                        <span class="categories_tag <?=$category->color?> mt-0"><?=$category->title?></span>
                    <? } ?>
                    <p class="text">
                        <?=$model->text?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $this->render('recently-watched',['recentlyWatched'=>$recentlyWatched])?>

