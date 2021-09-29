<div class="block_deskription_plan">
    <div class="block_plan">
        <div class="block_post_blue"></div>
        <img src="<?= $model->image->getUrl() ?>" alt=""/>
    </div>
    <div class="white_info">
        <div>
            <h3>
                <?= $model->title ?>
            </h3>
            <span class="phase <?php if($model->phase==2) echo 'green';?>">Phase <?= $model->phase ?></span>
            <p>
                <?= $model->short_text ?>
            </p>
        </div>
        <a href="<?= \yii\helpers\Url::to(['meal-plan/view', 'id' => $model->id]) ?>" style="margin: 0"
           class="btn continue">View Plan</a>
    </div>
</div>