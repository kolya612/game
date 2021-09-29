<?php

    $this->registerJs("
        $('#register-form').on('beforeSubmit', function (e) {
            showLoader();
        });
    ", \yii\web\View::POS_END);

    $link_to_term = \yii\helpers\Url::to(['guide/terms-and-conditions']);
?>

<section class="welcome-page register bg-1">
    <div class="container del-pd">
        <div class="register-step-block">
            <div class="step-1 step-active">
                <div class="form-wrapper">
                    <div class="form__box">
                        <h1 class="title">Create your VIP account</h1>
                        <? $form=\yii\widgets\ActiveForm::begin([
                            'id'=>'register-form',
                            'enableClientValidation' => true,
                            'enableAjaxValidation' => true
                        ]) ?>
                            <?=$form
                                ->field($model,'invitation_code')
                                ->textInput(["placeholder"=>"Enter Invitation Code (optional)"])
                                ->label('Enter Invitation Code (optional)')?>
                            <span class="text">Enter your email and password</span>
                            <?=$form
                                ->field($model,'email')
                                ->textInput(["placeholder"=>"Email Address"])
                                ->label('Email Address')?>
                            <?=$form
                                ->field($model,'password')
                                ->passwordInput(["placeholder"=>"Password"])
                                ->label('Password')?>
                            <?=$form
                                ->field($model,'agree',['options'=>['class'=>'form-group form-check']])
                                ->checkbox([
                                    "value"=>"1",
                                    'label'=>'I agree to the <a class="checkbox__link" href="' . $link_to_term . '">terms and conditions</a>',
                                    'labelOptions'=>['class'=>'form-check-label'],
                                    'class'=>"form-check-input",
                                ])
                                ->label(false)?>
                            <button class="btn entry-btn" type="submit">
                                <svg class="lock-icon" width="15" height="20" viewBox="0 0 15 20" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.5833 7.5H13.3333V5.83332C13.3333 2.6168 10.7166 0 7.5 0C4.28344 0 1.66668 2.6168 1.66668 5.83332V7.5H0.41668C0.186367 7.5 0 7.68637 0 7.91668V18.3334C0 19.2525 0.747461 20 1.66668 20H13.3334C14.2525 20 15 19.2525 15 18.3333V7.91668C15 7.68637 14.8136 7.5 14.5833 7.5ZM8.74758 16.204C8.76059 16.3216 8.72277 16.4396 8.64383 16.5279C8.56488 16.6162 8.45176 16.6667 8.33336 16.6667H6.66668C6.54828 16.6667 6.43516 16.6162 6.35621 16.5279C6.27727 16.4396 6.23941 16.3216 6.25246 16.204L6.51531 13.8404C6.08848 13.5299 5.83336 13.0387 5.83336 12.5C5.83336 11.5808 6.58082 10.8333 7.50004 10.8333C8.41926 10.8333 9.16672 11.5808 9.16672 12.5C9.16672 13.0387 8.9116 13.5299 8.48477 13.8404L8.74758 16.204ZM10.8333 7.5H4.16668V5.83332C4.16668 3.99535 5.66203 2.5 7.5 2.5C9.33797 2.5 10.8333 3.99535 10.8333 5.83332V7.5Z"
                                          fill="white"/>
                                </svg>
                                Create VIP Account
                            </button>
                        <? \yii\widgets\ActiveForm::end(); ?>
                        <p class="line">or</p>
                        <div class="social-group">
                            <a class="btn social-group__btn" onclick="showLoader();" href="<?=\yii\helpers\Url::to(['auth/auth','authclient'=>'facebook'])?>">
                                <svg width="30" height="30" viewBox="0 0 31 30" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.2424 30C23.5266 30 30.2424 23.2843 30.2424 15C30.2424 6.71573 23.5266 0 15.2424 0C6.9581 0 0.242371 6.71573 0.242371 15C0.242371 23.2843 6.9581 30 15.2424 30Z"
                                          fill="white"/>
                                    <path d="M19.0133 14.5883H16.3367V24.394H12.2815V14.5883H10.3528V11.1422H12.2815V8.91217C12.2815 7.31746 13.039 4.82031 16.3728 4.82031L19.3767 4.83288V8.17792H17.1972C16.8397 8.17792 16.337 8.35653 16.337 9.11726V11.1454H19.3676L19.0133 14.5883Z"
                                          fill="#1877F2"/>
                                </svg>
                                <span>Facebook</span>
                            </a>
                            <a class="btn social-group__btn" onclick="showLoader();" href="<?=\yii\helpers\Url::to(['auth/auth','authclient'=>'google'])?>">
                                <svg width="30" height="30" viewBox="0 0 26 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.257629 2C0.257629 0.89543 1.15306 0 2.25763 0H23.2576C24.3622 0 25.2576 0.895431 25.2576 2V23C25.2576 24.1046 24.3622 25 23.2576 25H2.25763C1.15306 25 0.257629 24.1046 0.257629 23V2Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M21.8976 13.2042C21.8976 12.566 21.8404 11.9524 21.734 11.3633H13.2576V14.8446H18.1013C17.8926 15.9696 17.2585 16.9228 16.3054 17.561V19.8192H19.214C20.9158 18.2524 21.8976 15.9451 21.8976 13.2042Z"
                                          fill="#4285F4"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M13.2576 22.0009C15.6876 22.0009 17.7249 21.195 19.214 19.8205L16.3054 17.5623C15.4995 18.1023 14.4685 18.4214 13.2576 18.4214C10.9135 18.4214 8.92945 16.8382 8.22172 14.7109H5.2149V17.0428C6.69581 19.9841 9.73945 22.0009 13.2576 22.0009Z"
                                          fill="#34A853"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M8.22172 14.7108C8.04172 14.1708 7.93945 13.594 7.93945 13.0008C7.93945 12.4076 8.04172 11.8308 8.22172 11.2908V8.95898H5.2149C4.60536 10.174 4.25763 11.5485 4.25763 13.0008C4.25763 14.4531 4.60536 15.8276 5.2149 17.0426L8.22172 14.7108Z"
                                          fill="#FBBC05"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M13.2576 7.57955C14.579 7.57955 15.7654 8.03364 16.6981 8.92545L19.2795 6.34409C17.7208 4.89182 15.6835 4 13.2576 4C9.73945 4 6.69581 6.01682 5.2149 8.95818L8.22172 11.29C8.92945 9.16273 10.9135 7.57955 13.2576 7.57955Z"
                                          fill="#EA4335"/>
                                </svg>
                                <span>Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="register-form__btn-wrapper">
                        <a class="btn-help-link" onclick="showLoader();" href="<?=\yii\helpers\Url::to(['auth/login'])?>">Return to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <ul class="page-bar">
        <li class="link link-1 active"></li>
        <li class="link link-2"></li>
        <li class="link link-3"></li>
        <li class="link link-4"></li>
    </ul>
</section>

