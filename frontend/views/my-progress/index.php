<?php

use yii\widgets\ListView;

$bundle=\frontend\assets\AppAsset::register($this);
?>




<section class="header-board pp">
    <div class="container">

<!--        <div class="alert-block">-->
<!--            <div class="alert alert-success big-pd text-center" role="alert">-->
<!--                <span class="text">Your checkin was added successfully!</span>-->
<!--            </div>-->
<!--        </div>-->

        <div class="header-board__top">
            <h1 class="title">My Progress</h1>
            <?=$this->render('../elements/checkin-button')?>
        </div>
        <p class="text">You will see subtle changes at first. As long as you are losing fat and gaining muscle, you are
            on the right track.</p>
    </div>
</section>

<section class="progress-tabs">

    <div class="container">
        <ul class="nav-tabs-wrapper nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="link link-left active" id="timeline" data-toggle="pill" href="#timeline-tab" role="tab"
                   aria-controls="timeline-tab" aria-selected="true">
                    <span class="text">Timeline</span>
                    <svg class="icon" width="18" height="14" viewBox="0 0 18 14" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 0H3.8941V3.8941H0V0Z" fill="white"/>
                        <path d="M5.13159 0H17.5984V3.8941H5.13159V0Z" fill="white"/>
                        <path d="M0 5.05273H3.8941V8.94683H0V5.05273Z" fill="white"/>
                        <path d="M5.13159 5.05273H17.5984V8.94683H5.13159V5.05273Z" fill="white"/>
                        <path d="M0 10.106H3.8941V14.0002H0V10.106Z" fill="white"/>
                        <path d="M5.13159 10.106H17.5984V14.0002H5.13159V10.106Z" fill="white"/>
                    </svg>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="link link-right" id="table" data-toggle="pill" href="#table-tab" role="tab"
                   aria-controls="table-tab" aria-selected="false">
                    <svg class="icon" width="18" height="14" viewBox="0 0 16 14" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3333 0H0V3H15.3333V0Z" fill="#ffffff"/>
                        <path d="M4.33334 4H0V6.66665H4.33334V4Z" fill="#ffffff"/>
                        <path d="M4.33334 11.3335H0V14.0001H4.33334V11.3335Z" fill="#ffffff"/>
                        <path d="M4.33334 7.6665H0V10.3332H4.33334V7.6665Z" fill="#ffffff"/>
                        <path d="M10 4H5.33337V6.66665H10V4Z" fill="#ffffff"/>
                        <path d="M10 11.3335H5.33337V14.0001H10V11.3335Z" fill="#ffffff"/>
                        <path d="M10 7.6665H5.33337V10.3332H10V7.6665Z" fill="#ffffff"/>
                        <path d="M15.3334 4H11.0001V6.66665H15.3334V4Z" fill="#ffffff"/>
                        <path d="M15.3334 11.3335H11.0001V14.0001H15.3334V11.3335Z" fill="#ffffff"/>
                        <path d="M15.3334 7.6665H11.0001V10.3332H15.3334V7.6665Z" fill="#ffffff"/>
                    </svg>
                    <span class="text"> Table</span>
                </a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <!--first-tab -->
            <div class="timeline-tabs tab-pane fade in show active" id="timeline-tab" role="tabpanel"
                 aria-labelledby="timeline">
                <? \yii\widgets\Pjax::begin(['options'=>['class'=>'my-progress-container']]); ?>
                <? if(!$lastProgress){?>
                    <div class="timeline-tabs__first-message">
                        <div class="row">
                            <div class="col-9">
                                <h3 class="title">Start your first photo checkin.</h3>
                                <p class="text">Upload clear photos to start your progress. Don???t be afraid to show the
                                    areas that need the most improvement. We are here to help you become the best you. </p>
                                <a class="btn btn-blue-style" href="<?=\yii\helpers\Url::to(['my-progress/add-photo'])?>">Check In</a>
                            </div>

                            <div class="col-3 text-right">
                                <svg width="30" height="26" viewBox="0 0 30 26" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.8383 15.0245C19.8383 17.6924 17.6679 19.8628 15 19.8628C12.3321 19.8628 10.1625 17.6924 10.1625 15.0245C10.1625 12.3565 12.3321 10.1862 15 10.1862C17.6679 10.1862 19.8383 12.3574 19.8383 15.0245ZM30 8.15435V21.8963C30 23.7282 28.5147 25.2136 26.6827 25.2136H3.3173C1.48532 25.2136 0 23.7282 0 21.8963V8.15435C0 6.32237 1.48532 4.83705 3.3173 4.83705H7.39758V3.68926C7.39758 2.08617 8.6963 0.786621 10.3002 0.786621H19.6998C21.3037 0.786621 22.6024 2.08617 22.6024 3.68926V4.83622H26.6827C28.5147 4.83704 30 6.32237 30 8.15435ZM22.3263 15.0245C22.3263 10.9848 19.0396 7.69822 15 7.69822C10.9612 7.69822 7.67457 10.9848 7.67457 15.0245C7.67457 19.0641 10.9612 22.3507 15 22.3507C19.0396 22.3507 22.3263 19.0641 22.3263 15.0245Z"
                                          fill="#7084CB"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                <? } ?>

                <div class="group">
                    <? if($lastProgress){ ?>
                    <div class="progress-info-wrapper">
                        <? echo $this->render('tracking-progress-row',['title'=>'Latest Checkin','model'=>$lastProgress])?>
                    </div>
                    <? } ?>
                    <? if($firstProgress){ ?>
                        <div class="progress-info-wrapper">
                            <? echo $this->render('tracking-progress-row',['title'=>'First Checkin','model'=>$firstProgress])?>
                        </div>
                    <? } ?>
                </div>

                <?
                    echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'options'=>[
                            'class'=>'group',
                        ],
                        'pager' => [
                            'prevPageLabel'=>'<span class="label">Prev</span><span class="prev-button"></span>',
                            'nextPageLabel'=>'<span class="label">Next</span><span class="next-button"></span>',
                        ],
                        'emptyText'=>'',
                        'itemOptions' => ['tag'=>'div','class'=>'progress-info-wrapper'],
                        'layout' => '
                            {items}
                            {pager}
                        ',
                        'itemView' => function ($model, $key, $index, $widget) {
                            return $this->render('tracking-progress-row',['model' => $model]);
                        }
                    ]);
                ?>

                <? \yii\widgets\Pjax::end(); ?>

            </div>
            <!---->

            <!--second-tab-->
            <div class="table-tabs tab-pane fade in" id="table-tab" role="tabpanel" aria-labelledby="table">
                <? \yii\widgets\Pjax::begin(['options'=>['class'=>'my-progress-container']]); ?>
                <?
                    if(!$tableDataProvider->getTotalCount()){
                ?>
                        <table class="my-progress__table first-message">

                            <thead>
                            <tr>
                                <th></th>
                                <th><span class="text">Weight</span></th>
                                <th><span class="text">Fat</span></th>
                                <th><span class="text">Photo Checkin</span></th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td data-label="Date">
                                    <a class="text-data" href="<?=\yii\helpers\Url::to(['my-progress/add-photo'])?>">You haven???t added any checkins yet!</a>
                                </td>

                                <td data-label="Weight">
                                    <a class="text-value" href="#" onclick="getWeightByDate(false,true); return false;">
                                        <span>Add</span>
                                    </a>
                                </td>

                                <td data-label="Fat">
                                    <a class="text-value" href="#" onclick="getFatByDate(false,true); return false;">
                                        <span>Add</span>
                                    </a>
                                </td>

                                <td data-label="Photo Checkin">
                                    <a class="text-value" href="<?=\yii\helpers\Url::to(['my-progress/add-photo'])?>">
                                        <span>Upload</span>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                <? }else{ ?>

                        <?
                            echo ListView::widget([
                                'dataProvider' => $tableDataProvider,
                                'options'=>[
                                    'class'=>'group',
                                ],
                                'pager' => [
                                    'prevPageLabel'=>'<span class="label">Prev</span><span class="prev-button"></span>',
                                    'nextPageLabel'=>'<span class="label">Next</span><span class="next-button"></span>',
                                ],
                                'itemOptions' => ['tag'=>'tr'],
                                'layout' => '
                                    <table class="my-progress__table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <a class="box-text" href="#">
                                                        <span class="text">Date</span>
                                                    </a>
                                                </th>
                                                <th><span class="text">Weight</span></th>
                                                <th><span class="text">Fat</span></th>
                                                <th><span class="text">Front</span></th>
                                                <th><span class="text">Back</span></th>
                                                <th><span class="text">Side</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    {items}
                                         </tbody>
                                    </table>
                                    {pager}
                                ',
                                'itemView' => function ($model, $key, $index, $widget) {
                                    return $this->render('tracking-progress-table-row',['model' => $model]);
                                }
                            ]);
                        ?>
                <? } ?>
                <? \yii\widgets\Pjax::end()?>
            </div>
        </div>

<!--        <a class="next-page__link" href="#">-->
<!--            Next-->
<!--            <div class="icon">-->
<!--                <svg width="10" height="15" viewBox="0 0 10 15" fill="none"-->
<!--                     xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M9.0982 6.63345L2.82122 0.365813C2.59006 0.121904 2.3014 0 1.95468 0C1.60795 0 1.31929 0.122039 1.08813 0.365813L0.356438 1.088C0.118903 1.3255 0.000134813 1.61419 0.000134813 1.95437C0.000134813 2.28812 0.118869 2.58025 0.356438 2.83049L5.03542 7.50003L0.356236 12.1792C0.118768 12.4167 0 12.7054 0 13.0456C0 13.3793 0.118734 13.6715 0.356236 13.9217L1.088 14.6438C1.3255 14.8813 1.61446 15 1.95454 15C2.29476 15 2.58365 14.8813 2.82109 14.6438L9.0982 8.37612C9.33581 8.12581 9.45468 7.83374 9.45468 7.5C9.45471 7.15982 9.33581 6.87096 9.0982 6.63345Z"-->
<!--                          fill="white"/>-->
<!--                </svg>-->
<!--            </div>-->
<!--        </a>-->
    </div>
</section>
