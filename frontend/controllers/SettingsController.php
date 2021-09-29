<?php
namespace frontend\controllers;

use backend\modules\progress\models\Progress;
use common\models\Data;
use frontend\models\Orders;
use vendor\wbp\multipleCountrySelector\CountryStateHelper;
use wbp\dumper\Dumper;
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
use backend\modules\members\models\Members;
use yii\web\HttpException;
use yii\web\UploadedFile;
use frontend\models\Billings;

/**
 * Site controller
 */
class SettingsController extends BaseController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index','billing','billing-edit','billing-delete','physical-orders','digital-orders','uploadImage','getImage','deleteImage','get-states'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actionIndex()
    {
        $member = Members::findOne(['id' => Yii::$app->user->id]);

        $member->scenario = Members::SCENARIO_EDIT_PROFILE;

        if (Yii::$app->request->post()) {
            $member->load(Yii::$app->request->post());
            $member->save();
        }

        return $this->render('index',[
            'formModel' => $member
        ]);
    }

    public function actionBilling()
    {
        $billing = new Billings();

        if (Yii::$app->request->post()) {
            $billing->load(Yii::$app->request->post());

            $billing->save();

            return Yii::$app->getResponse()->redirect('billing');
        }

        return $this->render('billing',['formModel' => $billing]);
    }

    public function actionBillingEdit($billing_id)
    {
        $billing = Billings::findOne($billing_id);

        $expiration_month = $billing->expiration_month<10 ? '0'.$billing->expiration_month : $billing->expiration_month;
        $billing->expiration_date = $expiration_month . '/' . $billing->expiration_year;

        if (Yii::$app->request->post()) {
            $billing->load(Yii::$app->request->post());

            $billing->save();

            return Yii::$app->getResponse()->redirect('billing');
        }

        return $this->render('billing-edit',['formModel' => $billing]);
    }


    public function actionBillingDelete($billing_id)
    {
        $billing = Billings::findOne($billing_id);

        $billing->delete();

        return Yii::$app->getResponse()->redirect('billing');
    }

    public function actionPhysicalOrders()
    {
        $user_id = Yii::$app->user->id;

        $dataProvider=new ActiveDataProvider([
            'query'=>Orders::find()
                ->joinWith('orderItems')
                ->where(['wbp_order_items.type'=>'supplement'])
                ->andWhere(['wbp_orders.member_id'=>$user_id])
                ->andWhere(['wbp_orders.payment_status'=>1])
                ->orderBy('created_at DESC')
        ]);

        return $this->render('physical-orders',[
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionDigitalOrders()
    {
        $user_id = Yii::$app->user->id;

        $dataProvider=new ActiveDataProvider([
            'query'=>Orders::find()
                ->joinWith('orderItems')
                ->where(['wbp_order_items.type'=>'workout'])
                ->orWhere(['wbp_order_items.type'=>'meal'])
                ->andWhere(['wbp_orders.member_id'=>$user_id])
                ->andWhere(['wbp_orders.payment_status'=>1])
                ->orderBy('created_at DESC')
        ]);

        return $this->render('digital-orders',[
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionGetStates()
    {
        $result[] = 'State';
        $get_id=Yii::$app->request->get('country_id', false);
        $country_id=Yii::$app->request->post('country_id',$get_id);
        if($country_id){
            $result = CountryStateHelper::getStatesForCountry($country_id);
        }

        return json_encode($result);
    }

    public function actions()
    {
        return [
            'getImage' => [
                'class' => \wbp\uploadifive\GetProfileAction::className(),
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

                    if(!in_array($type, Members::$imageTypes)) return false;

                    $image = new Image();
                    if($item_id !== 'null'){
                        $image->item_id = Yii::$app->user->identity->id;
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
