<?php

namespace backend\modules\profile\controllers;

use backend\controllers\OneModelBaseController;
use common\models\User;
use Yii;

class DefaultController extends OneModelBaseController
{
    public function init(){
        $this->ModelName=User::className();

        return parent::init();
    }

    public function actionIndex(){
        $this->trigger(self::BEFORE_EDIT);
        $this->trigger(self::BEFORE_ADD_EDIT);

        $modelName = $this->ModelName;

        $model = $modelName::findOne(['id' => (int)$this->user->id]);
        $model->scenario = self::UPDATE_SCENARIO_NAME;

        if ($model->load(Yii::$app->request->post())) {
            $saved = $model->save();
            if ($saved) {
                Yii::$app->getSession()->setFlash('success',  Yii::t('index',$this->successEditMessage));
            } else {
                Yii::$app->getSession()->setFlash('error',  Yii::t('index',$this->errorMessage));
            }
        }

        $form = $this->renderPartial($this->formView, ['formModel' => $model]);

        return $this->render($this->editView, ['formModel' => $model, 'form' => $form]);
    }

}
