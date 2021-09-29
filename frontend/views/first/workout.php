<?php
    $bundle=\frontend\assets\AppAsset::register($this);

    $this->registerJs("
        $(document).on('click','.block_plan.can-be-selected',function(){
            $('.block_plan.can-be-selected').removeClass('checked');
            
            $(this).addClass('checked');
            $('input[name=workout]').val($(this).data('id'));
            $('#plan-selection-form button').removeClass('disabled');
        });
        
        $('#plan-selection-form').submit(function(){
            if(!$('input[name=workout]').val()){
                return false;
            }
        });
    ",\yii\web\View::POS_END);
?>


<section class="welcome-page plan-selection bg-2">
    <div class="logo">
        <a href="<?=\yii\helpers\Url::to([''])?>">
            <svg width="107" height="50" viewBox="0 0 107 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.39378 49.908C1.76693 49.908 0 48.8955 0 46.9625V38.9545C0 38.4943 0.278989 38.2181 0.836966 38.2181C1.39494 38.2181 1.67393 38.4943 1.67393 38.9545V46.9625C1.67393 48.067 2.88288 48.5273 5.30078 48.5273H12.0895C12.5545 48.5273 12.7405 48.8034 12.7405 49.2636C12.7405 49.7239 12.5545 49.908 12.0895 49.908H5.39378ZM16.1813 49.2636C16.1813 49.7239 15.9024 50 15.3444 50C14.7864 50 14.5074 49.7239 14.5074 49.2636V38.9545C14.5074 38.4943 14.7864 38.2181 15.4374 38.2181C15.9954 38.2181 16.2743 38.4943 16.2743 38.9545V49.2636H16.1813ZM37.7565 49.2636C37.7565 49.7239 37.4775 50 36.8265 50C36.2685 50 35.9895 49.7239 35.9895 49.2636V40.7954L29.3868 49.3557C29.1078 49.8159 28.6428 50 28.1779 50C27.6199 50 27.2479 49.8159 26.9689 49.3557L20.2732 40.7954V49.2636C20.2732 49.7239 19.9942 50 19.4362 50C18.8782 50 18.5992 49.7239 18.5992 49.2636V39.2306C18.5992 38.5863 18.9712 38.2181 19.6222 38.2181C20.0872 38.2181 20.4592 38.4022 20.7382 38.7704L28.1779 48.2511L35.5246 38.6784C35.6176 38.4943 35.8035 38.4022 35.9895 38.3102C36.1755 38.2181 36.3615 38.2181 36.5475 38.2181C37.1985 38.2181 37.5705 38.5863 37.5705 39.2306V49.2636H37.7565ZM42.0343 49.2636C42.0343 49.7239 41.7553 50 41.1973 50C40.6393 50 40.3604 49.7239 40.3604 49.2636V38.9545C40.3604 38.4943 40.6394 38.2181 41.2903 38.2181C41.8483 38.2181 42.1273 38.4943 42.1273 38.9545V49.2636H42.0343ZM50.6829 39.6909V49.2636C50.6829 49.7239 50.4039 50 49.846 50C49.288 50 49.009 49.7239 49.009 49.2636V39.6909H44.1732C43.7082 39.6909 43.5222 39.4147 43.5222 38.9545C43.5222 38.4943 43.7082 38.3102 44.1732 38.3102H55.5187C55.9837 38.3102 56.1697 38.4943 56.1697 38.9545C56.1697 39.4147 55.9837 39.6909 55.5187 39.6909H50.6829ZM71.7931 38.3102H64.2604C63.7954 38.3102 63.6094 38.5863 63.6094 39.0466C63.6094 39.5068 63.7954 39.6909 64.2604 39.6909H71.7001C73.56 39.6909 74.583 40.1511 74.583 41.1636V43.3727H64.2604C63.8884 43.3727 63.7024 43.6488 63.7024 44.1091C63.7024 44.5693 63.8884 44.8454 64.2604 44.8454H74.583V47.1466C74.583 48.1591 73.002 48.6193 70.5841 48.6193H64.3534H64.2604H62.6795C60.2616 48.6193 59.0526 48.067 59.0526 47.0545V39.0466C59.0526 38.5863 58.7736 38.3102 58.2156 38.3102C57.6577 38.3102 57.3787 38.5863 57.3787 39.0466V46.9625C57.3787 48.9875 59.1456 49.908 62.7724 49.908H69.5612H69.6542H71.6071C74.769 49.908 76.3499 48.9875 76.3499 47.0545V41.0716C76.3499 39.2306 74.862 38.3102 71.7931 38.3102ZM91.1363 47.3307C91.1363 49.0795 89.6484 50 86.7655 50H78.9538C78.4888 50 78.3028 49.7239 78.3028 49.2636C78.3028 48.8034 78.4888 48.6193 78.9538 48.6193H86.9515C88.5324 48.6193 89.3694 48.1591 89.3694 47.2386V46.2261C89.3694 45.2136 88.4394 44.7534 86.4865 44.7534H82.9526C79.8838 44.7534 78.3958 43.925 78.3958 42.2682V41.0716C78.3958 39.2306 79.6978 38.4022 82.3946 38.4022H90.1133C90.5783 38.4022 90.7643 38.5863 90.7643 39.0466C90.7643 39.5068 90.5783 39.6909 90.1133 39.6909H82.1157C80.8137 39.6909 80.1627 40.1511 80.1627 41.1636V42.0841C80.1627 42.9125 80.9997 43.3727 82.6736 43.3727H86.3005C87.8814 43.3727 89.0904 43.5568 89.9273 44.017C90.7643 44.4772 91.1363 45.1216 91.1363 46.042V47.3307ZM106.667 47.3307C106.667 49.0795 105.179 50 102.296 50H94.4842C94.0192 50 93.8332 49.7239 93.8332 49.2636C93.8332 48.8034 94.0192 48.6193 94.4842 48.6193H102.482C104.063 48.6193 104.9 48.1591 104.9 47.2386V46.2261C104.9 45.2136 103.97 44.7534 102.017 44.7534H98.483C95.4141 44.7534 93.9262 43.925 93.9262 42.2682V41.0716C93.9262 39.2306 95.2281 38.4022 97.925 38.4022H105.644C106.109 38.4022 106.295 38.5863 106.295 39.0466C106.295 39.5068 106.109 39.6909 105.644 39.6909H97.646C96.3441 39.6909 95.6931 40.1511 95.6931 41.1636V42.0841C95.6931 42.9125 96.5301 43.3727 98.204 43.3727H101.831C103.412 43.3727 104.621 43.5568 105.458 44.017C106.295 44.4772 106.667 45.1216 106.667 46.042V47.3307ZM76.6289 12.6294C76.5359 11.9851 76.4429 11.3408 76.2569 10.7885C76.0709 10.1442 75.6989 9.59192 75.141 9.13169C74.862 8.94759 74.583 8.7635 74.211 8.67146C73.839 8.57941 73.56 8.57941 73.188 8.57941C72.5371 8.67146 71.8861 8.85555 71.3281 9.13169C70.7701 9.40782 70.2122 9.68396 69.6542 9.9601C68.0732 10.8806 66.5853 11.8931 65.1903 12.9976C63.7954 12.1692 62.4005 11.2487 61.0055 10.3283C58.8666 8.94759 56.8207 7.56691 54.5888 6.27827C53.5658 5.72599 52.6359 5.17372 51.6129 4.62145C41.6623 -1.36153 32.5487 -3.47858 30.0378 10.4203C30.0378 10.4203 29.8518 11.4328 30.1308 10.6965C31.8047 8.21123 33.4786 6.37031 35.2456 5.17372C34.7806 5.91009 34.5016 6.7385 34.2226 7.47486C33.8506 8.7635 33.5716 10.0521 33.4786 11.3408C33.3856 12.6294 33.2926 13.9181 33.2926 15.2067C33.2926 16.4953 33.3856 17.6919 33.4786 18.9806C33.5716 20.2692 33.7576 21.5579 34.0366 22.7545C34.3156 24.0431 34.6876 25.2397 35.3386 26.4363C35.6176 26.9886 35.9895 27.6329 36.4545 28.0931C36.6405 28.3692 36.9195 28.5533 37.1985 28.8295C37.4775 29.0136 37.7565 29.1977 38.1285 29.3818C38.7794 29.6579 39.4304 29.842 40.1744 29.842C40.8253 29.842 41.5693 29.842 42.2203 29.6579C43.5222 29.3818 44.7312 28.8295 45.8471 28.2772C48.079 27.0806 50.125 25.6079 52.1709 24.1351C56.1697 21.0976 59.8896 17.6919 63.7954 14.5624C64.0744 14.2862 64.4464 14.1022 64.7254 13.826C65.4693 14.2862 66.2133 14.6544 67.0503 15.1147C68.1662 15.6669 69.2822 16.3113 70.4911 16.7715C71.0491 17.0476 71.7001 17.2317 72.3511 17.3238C73.002 17.5078 73.653 17.5999 74.304 17.4158C74.676 17.3238 74.9549 17.2317 75.3269 17.0476C75.6059 16.8635 75.8849 16.5874 76.0709 16.3113C76.4429 15.759 76.6289 15.0226 76.7219 14.4703C76.7219 14.1022 76.8149 13.826 76.8149 13.5499C76.6289 13.2737 76.6289 12.9056 76.6289 12.6294ZM64.3534 13.734C64.0744 13.9181 63.7954 14.1942 63.5164 14.3783C59.6106 17.5079 55.7977 20.8215 51.7059 23.767C50.6829 24.5033 49.66 25.2397 48.637 25.884C47.6141 26.5283 46.4981 27.1727 45.3822 27.6329C44.2662 28.1852 43.0573 28.5533 41.9413 28.8295C41.3833 28.9215 40.7323 28.9215 40.1744 28.9215C39.6164 28.8295 39.0584 28.7374 38.5934 28.4613C37.5705 28.0011 36.9195 26.9886 36.3615 25.9761C35.8965 24.9636 35.5246 23.767 35.3386 22.5704C34.9666 20.1772 34.8736 17.6919 34.9666 15.2988C35.0596 12.9056 35.2456 10.4203 35.9895 8.21123C36.3615 7.10668 36.9195 6.09418 37.5705 5.26577C38.3144 4.43735 39.1514 3.88508 40.2674 3.60894C41.2903 3.3328 42.4993 3.42485 43.6152 3.60894C44.8242 3.79303 45.9401 4.16122 47.0561 4.5294C48.172 4.89758 49.288 5.44986 50.404 5.91009C51.5199 6.46236 52.7289 7.01464 53.8448 7.65896C56.0767 8.85555 58.2156 10.1442 60.3545 11.4328C61.5635 12.1692 62.7725 12.9056 63.9814 13.5499C64.0744 13.5499 64.2604 13.6419 64.3534 13.734ZM76.0709 14.4703C75.9779 15.0226 75.7919 15.6669 75.5129 16.1272C75.1409 16.5874 74.676 16.8635 74.118 16.8635C73.56 16.9556 73.002 16.8635 72.3511 16.6794C71.7931 16.4953 71.2351 16.3113 70.5841 16.0351C69.4682 15.5749 68.3522 14.9306 67.2363 14.3783C66.5853 14.0101 65.9343 13.6419 65.2833 13.2737C65.6553 12.9976 66.1203 12.6294 66.4923 12.3533C67.5153 11.6169 68.5382 10.8806 69.6542 10.3283C70.2122 10.0521 70.7701 9.77601 71.3281 9.49987C71.8861 9.31578 72.5371 9.13169 73.095 9.03964C73.653 8.9476 74.304 9.13169 74.769 9.49987C75.2339 9.86805 75.5129 10.4203 75.6989 10.9726C75.8849 11.5249 75.9779 12.1692 76.0709 12.7215C76.0709 12.9976 76.0709 13.3658 76.0709 13.6419C76.1639 13.826 76.1639 14.1942 76.0709 14.4703Z"
                      fill="white"/>
            </svg>
        </a>
    </div>
    <div class="container del-pd">
        <div class="login-form form-wrapper plan_section_block position-relative">
            <a class="back" href="<?=\yii\helpers\Url::to(['first/step-back'])?>"></a>
            <h1 class="title mb-4">Congratulations! You are ready to choose your fitness plan.</h1>
            <p class="text mb-5 pb-3">Your Free VIP Membership includes one free fitness plan. Choose a plan below
                then press continue to get started.</p>

<!--            <span class="close">-->
<!--               <i class="fas fa-times"></i>-->
<!--            </span>-->
            <form action="" method="post" id="plan-selection-form">
                <input type="hidden" name="<?=Yii::$app->request->csrfParam?>" value="<?=Yii::$app->request->getCsrfToken()?>" />
                <input type="hidden" name="workout" value="" />
                <button class="btn continue disabled">Continue </button>
            </form>
            <h4 class="mb-5">Personalized Recommendations</h4>
            <div class="row owl-carousel slide-one mb-5 mb-sm-0">
                <? foreach ($recomendedPlans as $workoutPlan){ ?>
                    <div class="col-12 np_mob">
                        <?=$this->render('../elements/workout-list-item',['model'=>$workoutPlan,'canSelect'=>true])?>
                    </div>
                <? } ?>

            </div>
            <h4 class="mb-5 mt-sm-5">You might also like...</h4>
            <div class="row owl-carousel slide-one" id="first-workout">
                <? foreach ($otherPlans as $workoutPlan){ ?>
                    <div class="col-12 np_mob">
                        <?=$this->render('../elements/workout-list-item',['model'=>$workoutPlan,'canSelect'=>true])?>
                    </div>
                <? } ?>
            </div>
            <?
                $this->registerJs("
                    $('#first-workout').owlCarousel({
                        loop: true, //Зацикливаем слайдер
                        margin: 10, //Отступ от картино если выводите больше 1
                        nav: false, //Отключил навигацию
                        autoplay: true, //Автозапуск слайдера
                        smartSpeed: 1000, //Время движения слайда
                        autoplayTimeout: 5000, //Время смены слайда
                        responsive: { //Адаптация в зависимости от разрешения экрана
                            0: {
                                items: 1
                            },
                            600: {
                                items: 2
                            },
                            1000: {
                                items: 4
                            }
                        }
                    });
                ", \yii\web\View::POS_READY);
            ?>
        </div>
    </div>
</section>
