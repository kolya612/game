<?php
namespace frontend\controllers;

use backend\modules\progress\models\Progress;
use Exception;
use frontend\models\FatForm;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use frontend\models\WeightForm;
use wbp\file\File;
use wbp\images\models\Image;
use Yii;
use yii\base\BaseObject;
use yii\base\InvalidArgumentException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\web\HttpException;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class MyProgressController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['index','check-date','track-weight','track-fat','get-weight','get-fat','add-photo','uploadImage','getImage','deleteImage'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }



    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $lastProgress=Yii::$app->user->identity->getLastProgress()->one();
        $firstProgress=Yii::$app->user->identity->getFirstProgress()->one();
        if($lastProgress->id==$firstProgress->id) $firstProgress=NULL;

        $progress=Yii::$app->user->identity->getLastProgress();
        if($lastProgress) $progress=$progress->andWhere(['!=', 'id', $lastProgress->id]);
        if($firstProgress) $progress=$progress->andWhere(['!=', 'id', $firstProgress->id]);

        $dataProvider=new ActiveDataProvider([
            'query'=>$progress,
            'pagination'=>[
                'pageSize'=>5
            ]
        ]);

        $progress=Yii::$app->user->identity->getLastProgress();

        $tableDataProvider=new ActiveDataProvider([
            'query'=>$progress,
            'pagination'=>[
                'pageSize'=>10
            ]
        ]);

        return $this->render('index',[
            'dataProvider'=>$dataProvider,
            'lastProgress'=>$lastProgress,
            'firstProgress'=>$firstProgress,
            'tableDataProvider'=>$tableDataProvider
        ]);
    }

    public function actionGetWeight(){
        $form  = new WeightForm();
        if($form->load(Yii::$app->request->get())){
            $progress = $form->getProgress();

            if($progress->weight){
                echo $progress->weight;
                exit();
            }
        }
        exit();
    }

    public function actionTrackWeight(){
        $form  = new WeightForm();
        if($form->load(Yii::$app->request->get()) && $form->validate()){
            $form->track();
            Yii::$app->session->setFlash('success', 'Your Progress has been added.');
            return $this->renderAjax('../elements/alert');
        }
    }

    public function actionGetFat(){
        $form  = new FatForm();
        if($form->load(Yii::$app->request->get())){
            $progress = $form->getProgress();

            if($progress->fat){
                echo $progress->fat;
                exit();
            }
        }
        exit();
    }

    public function actionTrackFat(){
        $form  = new FatForm();
        if($form->load(Yii::$app->request->get()) && $form->validate()){
            $form->track();
            Yii::$app->session->setFlash('success', 'Your Progress has been added.');
            return $this->renderAjax('../elements/alert');
        }
    }

    public function actionAddPhoto($date=false){
        if(!$date) $date=date("Y-m-d");
        else $date=date("Y-m-d",strtotime($date));

        $postDate=Yii::$app->request->post('Progress')['date'];
        if($postDate) $date=date("Y-m-d",strtotime($postDate));

        $progress=Progress::findOne(['date'=>$date,'member_id'=>Yii::$app->user->identity->id]);
        if(!$progress){
            $progress=new Progress([
                'member_id'=>Yii::$app->user->identity->id,
                'date'=>$date
            ]);
        }

        if($progress->load(Yii::$app->request->post())){
            $progress->save();
            Yii::$app->session->setFlash('success', 'Your Checkin Was Added Successfully!');

            return $this->redirect(['my-progress/index']);
        }

        return $this->render('add-photo',['model'=>$progress]);
    }

    public function actionCheckDate($date=false){
        if(!$date) $date=date("Y-m-d");
        else $date=date("Y-m-d",strtotime($date));

        $progress=Progress::findOne([
            'member_id'=>Yii::$app->user->identity->id,
            'date'=>$date
        ]);

        if(!$progress) return false;

        if($progress->getImage(Progress::$imageTypes[0])->id) return true;
        if($progress->getImage(Progress::$imageTypes[1])->id) return true;
        if($progress->getImage(Progress::$imageTypes[2])->id) return true;

        return false;
    }


    public function actions()
    {
        return [
            'getImage' => [
                'class' => \wbp\uploadifive\GetFrontAction::className(),
                'csrf' => false,
            ],
            'deleteImage' => [
                'class' => \wbp\uploadifive\DeleteAction::className(),
                'csrf' => false,
            ],
            'uploadImage' => [
                'class' => \wbp\uploadifive\UploadAction::className(),
                'uploadBasePath' => '@serverDocumentRoot/images/tmp', //file system path
//                'uploadBaseUrl' => \common\helpers\Url::getWebUrlFrontend('upload'), //web path
                'csrf' => false,
                'format' => '{yyyy}-{mm}-{dd}-{time}-{rand:6}', //save format
                'validateOptions' => [
                    'extensions' => ['jpg', 'jpeg', 'png'],
                    'maxSize' => 100 * 1024 * 1024, //file size
                ],
                'beforeValidate' => function ($actionObject) {
                    $modelName = Progress::className();
                    if(!$modelName) return;
                    if(isset($modelName::$imageSizesRequired)){
                        foreach ($modelName::$imageSizesRequired as $k => $v) {
                            if($k == Yii::$app->request->post('type')){

                                $obj = UploadedFile::getInstanceByName('Filedata');
                                if(!$obj) {throw new Exception("UploadedFile doesn't exist");}
                                $imageInfo = getimagesize($obj->tempName);
                                if(!$imageInfo) {throw new Exception("GD2 extension exist");}
                                if(count($imageInfo) < 2){throw new Exception("Not enough values");}
                                //$imageInfo[0]- width, $imageInfo[1]-height
                                if($imageInfo[0] < $v[0] || $imageInfo[1] < $v[1]){
                                    $error = 'The image you are trying to upload has invalid dimensions ('.$imageInfo[0].'x'.$imageInfo[1].'). Please change your image to match the required upload dimensions ('.$v[0].'x' . $v[1].') and try again.';
                                    throw new HttpException(400, $error);
                                }
                            }
                        }
                    }

                },
                'afterValidate' => function ($actionObject) {
                },
                'beforeSave' => function ($actionObject) {
                },
                'afterSave' => function ($filename, $fullFilename, $actionObject) {

                    //$filename; // image/yyyymmddtimerand.jpg
                    //$fullFilename; // /var/www/htdocs/image/yyyymmddtimerand.jpg
                    //$actionObject; // \wbp\uploadifive\UploadAction instance
                    $dir = Yii::getAlias(Yii::$app->getModule('im')->imagesStorePath);

                    $item_id = Yii::$app->getRequest()->post('item_id');
                    $type = Yii::$app->getRequest()->post('type');
                    $unique_id = Yii::$app->getRequest()->post('uniqueId');
                    $ext = pathinfo($fullFilename, PATHINFO_EXTENSION);

                    if(!in_array($type, Progress::$imageTypes)) return false;

                    $image = new Image();
                    if($item_id !== 'null'){

                        $progress = Progress::findOne($item_id);
                        if($progress && $progress->member_id!=Yii::$app->user->identity->id) return false;

                        $image->item_id = $item_id;
                    }

                    $image->type = $type;
                    $image->unique_id = $unique_id;
                    $image->ext = $ext;
                    $image->status = Image::STATUS_ACTIVE;
                    $image->deleted = Image::NON_DELETED;
                    $image->name = $actionObject->getUpladedFileName();
//                    file_put_contents(Yii::getAlias('@serverDocumentRoot/images/') . '/1', $dir . '/' . $image->id . '.' . $image->ext);

                    $image->save();

                    rename($fullFilename, $dir . '/' . $image->id . '.' . $image->ext);

                },
            ],

        ];
    }
}
