<?php

namespace backend\modules\dashboard\controllers;

use backend\controllers\OneModelBaseController;
use backend\modules\members\models\Members;
use backend\modules\members\models\MembersViewHistory;
use backend\modules\workouts\models\Workouts;
use backend\modules\workouts\models\SearchModel;
use Yii;

class DefaultController extends OneModelBaseController
{
    public function actionIndex(){
        $viewsCount=MembersViewHistory::find()->count();
        $membersCount=Members::find()->count();
        $members=Members::find()->orderBy('id desc')->limit(10)->all();
        return $this->render('index',['members'=>$members,'membersCount'=>$membersCount,'viewsCount'=>$viewsCount]);
    }

}
