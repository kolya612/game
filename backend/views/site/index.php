<?php

/* @var $this yii\web\View */

use wbp\urlManager\Url;
use yii\helpers\Html;

$this->title = 'Vip Portal Administration Dashboard';
?>
<div class="site-index">
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Workout Plans</h2>
                <p class="card-text">This panel helps you manage your health club, grow your membership base, and run your business from anywhere</p>
                <?php echo Html::a(
                    'Go to Control Panel',
                    Url::toRoute(
                        [
                            '/admin/workout_plans',
                        ]
                    ),
                    ['class' => 'btn-success grid-button btn']
                ); ?>
            </div>
            <div class="col-lg-4">
                <h2>Members</h2>
                <p class="card-text">This panel helps you manage collection of the portal members</p>
                <?php echo Html::a(
                    'Go to Control Panel',
                    Url::toRoute(
                        [
                            '/admin/members',
                        ]
                    ),
                    ['class' => 'btn-success grid-button btn']
                ); ?>
            </div>
            <div class="col-lg-4">
                <h2>Application Settings</h2>
                <p class="card-text">This panel helps you manage application settings and configuration</p>
                <?php echo Html::a(
                    'Go to Control Panel',
                    Url::toRoute(
                        [
                            '/admin/',
                        ]
                    ),
                    ['class' => 'btn-success grid-button btn']
                ); ?>
            </div>
        </div>

    </div>
</div>
