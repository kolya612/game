<?php

namespace wbp\uploadifive;

use wbp\file\File;
use Yii;

class DeleteFileAction extends \yii\base\Action {
    /**
     * Csrf Verify Enable
     * @var bool
     */
    public $csrf = true;

    public function init()
    {
        Yii::$app->request->enableCsrfValidation = false;

        if ($this->csrf && !$this->verifyCsrf()) {
            throw new \yii\web\BadRequestHttpException('csrf verify fail.');
        }

        return parent::init();
    }

    public function run() {

        $id=(int)Yii::$app->getRequest()->post('id');

        $video=File::findOne($id);
        if($video->id){
            $video->delete();
        }

    }


}
