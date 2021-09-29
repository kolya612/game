<?php
$bundle=\frontend\assets\AppAsset::register($this);
?>
<section class="my-account">
    <a class="drop-btn" id="account-menu-drop-btn" href="#">My Profile</a>

    <div class="container">
        <div class="row">

            <?=$this->render('../elements/setting-menu',['active'=>'billing'])?>

            <div class="col-12 col-lg-9">
                <div class="tab-content" id="pills-tabContent">

                    <div class="billing pp tab-pane fade show active"" id="billing" role="tabpanel"
                         aria-labelledby="pills-profile-tab">

                        <div class="my-account__content-wrapper">

                            <div class="update-payment-method block-show">
                                <div class="title-wrapper my-account__title">
                                    <h1 class="my-account__title mb-0">Billing</h1>
                                    <a class="return-link link-primary cancel-add-payment" href="<?=\yii\helpers\Url::to(['settings/billing'])?>">cancel</a>
                                </div>

                                <?=$this->render('billing-form',['bundle'=>$bundle, 'formModel'=>$formModel, 'title'=>'Update Payment Method'])?>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
