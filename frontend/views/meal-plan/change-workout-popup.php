
<!-- Modal -->
<div class="modal fade in" id="meal_popup_<?=$id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?=$model->title?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="block_deskription_plan">
                    <div class="block_plan">
                        <div class="block_post_blue"></div>
                        <img src="<?=$model->image->getUrl()?>" alt=""/>
                    </div>
                    <div class="white_info">
                        <h3>
                            <?=$model->title?>
                        </h3>
                        <span class="phase <?php if($model->phase==2) echo 'green';?>">Phase <?=$model->phase?></span>
                        <div class="d-flex align-items-center flex-wrap">
                            <? if($model->sale_price){ ?><div class="tile__price-value">$<?=$model->sale_price?></div> <? } ?>
                            <? if($model->price){ ?><div class="tile__price-old">$<?=$model->price?></div> <? } ?>
                            <? if($model->percent){ ?><div class="tile__price-safety"><?=$model->percent?>% OFF</div> <? } ?>
                        </div>
                        <p>
                            <?=$model->short_text?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?=\yii\helpers\Url::to(['/shop/meal-to-cart','id'=>$model->id])?>" class="btn btn-primary  w-100">Buy Now</a>
                <? if($lastFreeWorkout){ ?>
                    <div class="help_information">
                        You can only change your plan one time monthly. Your program started on <?=Yii::$app->formatter->asDate($lastFreeWorkout->created_at,'medium')?>
                    </div>
                <? }else{ ?>
                    <button onclick="$('#meal_popup_<?=$id?>').modal('hide');$('#confirm_meal_popup_<?=$id?>').modal('show');return false;" type="button" class="btn btn-secondary w-100" data-dismiss="modal">Switch Plan</button>
                <? } ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade in" id="confirm_meal_popup_<?=$id?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm your Switch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="help_information">
                    You can only change your plan one time monthly. Are you sure this is the plan you choose?
                </div>
                <div class="block_deskription_plan">
                    <div class="block_plan">
                        <div class="block_post_blue"></div>
                        <img src="<?=$model->image->getUrl()?>" alt=""/>
                    </div>
                    <div class="white_info">
                        <h3>
                            <?=$model->title?>
                        </h3>
                        <span class="phase <?php if($model->phase==2) echo 'green';?>">Phase <?=$model->phase?></span>
                        <p>
                            <?=$model->short_text?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?=\yii\helpers\Url::to(['/meal-plan/switch','id'=>$model->id])?>" class="btn btn-primary  w-100">Switch Plan</a>
                <button type="button" class="btn btn-secondary w-100" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
