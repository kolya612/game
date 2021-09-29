<?php
namespace frontend\controllers;

use backend\modules\meals\models\Meals;
use backend\modules\members\models\MemberPlans;
use backend\modules\supplements\models\Supplements;
use backend\modules\workouts\models\Workouts;
use frontend\models\Billings;
use frontend\models\OrderItems;
use frontend\models\Orders;
use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use kartik\mpdf\Pdf;
use wbp\dumper\Dumper;
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
use frontend\models\PdfHelper;

/**
 * Site controller
 */
class ShopController extends BaseController
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
                        'actions' => [
                            'index',
                            'view',
                            'supplement-to-cart',
                            'workout-to-cart',
                            'meal-to-cart',
                            'checkout',
                            'get-billing-info',
                            'delete-from-cart',
                            'thank-you',
                            'invoice'
                        ],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actionIndex()
    {
        $recomended=Yii::$app->user->identity->getRecomendedSupplements();

        $dataProvider=new ActiveDataProvider([
            'query'=>Supplements::find()
                ->where(['status'=>Supplements::STATUS_ACTIVE])
                ->andWhere(['not in', 'id', (clone $recomended)->select('id')])
        ]);



        return $this->render('index',[
            'recomended'=>$recomended,
            'dataProvider'=>$dataProvider
        ]);
    }

    public function actionView($id)
    {
        $recomended=Supplements::find()
            ->where(['status'=>Meals::STATUS_ACTIVE])
            ->andWhere([
                'goal'=>[Yii::$app->user->identity->goal,null],
                'gender'=>[Yii::$app->user->identity->gender,null],
            ]);

        $supplement = Supplements::find()
            ->where(['id'=>$id])->one();

        return $this->render('view',[
            'recomended'=>$recomended,
            'supplement'=>$supplement
        ]);
    }


    public function actionSupplementToCart($id)
    {
        $cart = Yii::$app->cart;
        $model = Supplements::findOne($id);

        $cart->removeAll();
        $cart->put($model, 1);

        return $this->redirect(['shop/checkout']);
    }

    public function actionWorkoutToCart($id)
    {
        $cart = Yii::$app->cart;
        $model = Workouts::findOne($id);

        $cart->removeAll();
        $cart->put($model, 1);

        return $this->redirect(['shop/checkout']);
    }

    public function actionMealToCart($id)
    {
        $cart = Yii::$app->cart;
        $model = Meals::findOne($id);

        $cart->removeAll();
        $cart->put($model, 1);

        return $this->redirect(['shop/checkout']);
    }

    public function actionCheckout()
    {
        $this->layout='cart';
        $cart = Yii::$app->cart;

        if(!$cart->getPositions()){
            return $this->redirect(['/']);
        }

        $orders = new Orders(['scenario'=>Orders::SCENARIO_FRONTEND]);

        $user = Yii::$app->user->id;

        if (Yii::$app->request->post()) {

            $orders->load(Yii::$app->request->post());
            $save = $orders->save();

            if($orders->payment_status == 2){
                Yii::$app->session->setFlash('error-payment', 'Payment failed.');
            }

            if($save && $orders->payment_status==Orders::PAYMENT_APPROVED){
                $cart->removeAll();

                return $this->redirect(['shop/thank-you','order_id'=>$orders->id]);
            }
        }

        return $this->render('checkout',[
            'cart' => $cart,
            'formModel' => $orders
        ]);
    }

    public function actionDeleteFromCart($position_id)
    {
        $cart = Yii::$app->cart;

        $cart->removeById($position_id);

        return $this->redirect(['/']);
    }

    public function actionThankYou($order_id)
    {
        $this->layout='cart';

        $order = Orders::findOne(['id' => $order_id]);

        if($order->member_id !== Yii::$app->user->id){
            return $this->redirect(['/']);
        }

        return $this->render('success',[
            'order' => $order
        ]);
    }

    public function actionInvoice($order_id)
    {
        $order = Orders::findOne(['id' => $order_id]);

        if($order->member_id !== Yii::$app->user->id){
            return $this->redirect(['/']);
        }

        $content = $order->getPdfContent();

        return PdfHelper::generate($content,'Invoice','order_'.$order_id.'.pdf',Pdf::DEST_DOWNLOAD);

    }

}
