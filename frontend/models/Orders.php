<?php
namespace frontend\models;

use common\models\WbpActiveRecord;
use vendor\wbp\multipleCountrySelector\CountryStateHelper;
use wbp\cart\Cart;
use wbp\dumper\Dumper;
use Yii;
use yii\base\BaseObject;
use yii\base\Model;
use yii\helpers\ArrayHelper;


class Orders extends WbpActiveRecord
{
    /**
     * {@inheritdoc}
     */
    /**
     * cvv for billing card
     */
    public $cvv;

    /**
     * cvv for new card
     */
    public $cvv2;

    public $billing_id;
    public $billing;
    public $term;
    public $subscription;
    public $address_the_same;
    public $shippable;
    public $expiration_date;

    const SCENARIO_FRONTEND = 'frontend';

    const PAYMENT_APPROVED=1;
    const PAYMENT_DECLINED=2;

    /* self::SCENARIO_DEFAULT */

    public static function tableName()
    {
        return '{{%orders}}';
    }

    public function rules()
    {
        return [
            [[
                'email',
                'phone',
                'shipping_first_name',
                'shipping_last_name',
                'shipping_address',
                'shipping_address1',
                'shipping_city',
                'shipping_zip',
                'card_number',
                'first_name',
                'last_name',
                'address',
                'address1',
                'city',
                'zip',
                'shipping_country',
                'shipping_state',
                'country',
                'state'
                ],'string', 'on'=>[self::SCENARIO_FRONTEND]],
            [[
                'expiration_month',
                'expiration_year',
            ],'integer', 'on'=>[self::SCENARIO_FRONTEND]],

            ['email', 'email'],

            [[
                'billing_id',
                'billing',
                'address_the_same',
                'cvv',
                'cvv2',
                'shippable'
             ], 'integer'],
            ['term', 'integer', 'min' => 1],


            [['email','phone','shipping_first_name','shipping_last_name','shipping_city','shipping_zip','shipping_address'], 'required', 'when' => function ($model) {
                return $model->shippable == 1;
            }, 'whenClient' => "function (attribute, value) {
                return $('#orders-shippable').val() == 1;
            }"],

            [['shipping_country','shipping_state'], 'string', 'min' => 2, 'when' => function ($model) {
                return $model->shippable == 1;
            }, 'whenClient' => "function (attribute, value) {
                return $('#orders-shippable').val() == 1;
            }"],

            ['cvv', 'required', 'when' => function ($model) {
                return $model->billing == 1;
            }, 'whenClient' => "function (attribute, value) {
                return $('#orders-billing').val() == 1;
            }"],

            [[
               'cvv2',
               'first_name',
               'last_name',
               'card_number',
               'expiration_date',
            ], 'required', 'when' => function ($model) {
                return $model->billing == 0;
            }, 'whenClient' => "function (attribute, value) {
                return $('#orders-billing').val() == 0;
            }"],

            [[
                'expiration_date',
            ], 'string', 'min' => 5,'max' => 5,'when' => function ($model) {
                return $model->billing == 0;
            }, 'whenClient' => "function (attribute, value) {
                return $('#orders-billing').val() == 0;
            }"],

            [[
               'expiration_month',
               'expiration_year'
            ], 'integer', 'min' => 1, 'when' => function ($model) {
                return $model->billing == 0;
            }, 'whenClient' => "function (attribute, value) {
                return $('#orders-billing').val() == 0;
            }"],

            [[
               'country','state'
             ], 'string', 'length' => [2, 50], 'when' => function ($model) {
                return $model->address_the_same == 0 && $model->billing == 0;
            }, 'whenClient' => "function (attribute, value) {
                if ($('#orders-shippable').val() == 1) {
                    return $('#defaultCheck3:checked').val()=== undefined;
                } else {
                    return $('#orders-billing').val() == 0;
                }
            }"],

            [[
                'address','city','zip'
            ], 'required', 'when' => function ($model) {
                return $model->address_the_same == 0 && $model->billing == 0;
            }, 'whenClient' => "function (attribute, value) {
                if ($('#orders-shippable').val() == 1) {
                    return $('#defaultCheck3:checked').val()=== undefined;
                } else {
                    return $('#orders-billing').val() == 0;
                }
            }"],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Email',
            'phone' => 'Phone',
            'shipping_first_name' => 'First Name',
            'shipping_last_name' => 'Last Name',
            'shipping_country' => 'Country',
            'shipping_address' => 'Address',
            'shipping_address1' => 'Address 2',
            'shipping_state' => 'State',
            'shipping_city' => 'City',
            'shipping_zip' => 'ZIP',
            'billing_id' => 'Select Payment Method',
            'cvv' => 'CVV',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'card_number' => 'Credit Card Number',
            'expiration_date' => 'Expiration Date',
            'cvv2' => 'CVV',
            'country' => 'Country',
            'address' => 'Address',
            'address1' => 'Address 2',
            'state' => 'State',
            'city' => 'City',
            'zip' => 'ZIP',
        ];
    }

    /* $('#orders-billing').val() == 0 */

    public function beforeSave($insert)
    {
        $this->member_id = Yii::$app->user->id;

        if ($this->billing == 1) {
            $billing = Billings::findOne($this->billing_id);
            $this->load($billing->getAttributes(),'');
        } else {
            if($this->shippable){
                if($this->address_the_same == 1) {
                    $this->country = $this->shipping_country;
                    $this->address = $this->shipping_address;
                    $this->address1 = $this->shipping_address1;
                    $this->city = $this->shipping_city;
                    $this->state = $this->shipping_state;
                    $this->zip = $this->shipping_zip;
                }

                $date = explode('/', $this->expiration_date);
                $this->expiration_month = $date[0];
                $this->expiration_year = $date[1];
            }
        }

        if ($insert && $this->scenario == self::SCENARIO_FRONTEND) {
            $this->total = Yii::$app->cart->getTotalPrice();
        }

        return parent::beforeSave($insert);
    }

    public function afterSave($insert, $changedAttributes)
    {
        if ($insert && $this->scenario == self::SCENARIO_FRONTEND) {
            OrderItems::createItems($this->id);

            if(!$this->payment_status){

                if($this->shippable){
                    $this->payPhysical();
                }else{
                    $this->pay();
                }

                foreach ($this->orderItems as $item){
                    $item->save();
                }
            }
        }
        $this->cvv = '';
        $this->cvv2 = '';

        return parent::afterSave($insert, $changedAttributes);
    }

    public function getOrderItems()
    {
        return $this->hasMany(OrderItems::className(), ['order_id' => 'id']);
    }

    public function getOrderIdString()
    {
        $string_len = 6;
        $id = '';

        for($x = 0;$x<$string_len-mb_strlen($this->id);$x++){
            $id .= '0';
        }

        return $id . $this->id;
    }

    public function getOrderTotalRegularPrice()
    {
        $regular_price = 0;
        foreach ($this->getOrderItems()->all() as $item) {
            if($item->old_price > 0){
                $regular_price += $item->old_price * $item->quantity;
            } else {
                $regular_price += $item->price * $item->quantity;
            }
        }

        return $regular_price;
    }

    public function getTotalDiscountedPrice()
    {
        $discounted_price = 0;
        foreach ($this->getOrderItems()->all() as $item) {
            $discounted_price += $item->price * $item->quantity;
        }

        return $this->getOrderTotalRegularPrice() - $discounted_price;
    }

    public function getCardEnding()
    {
        return substr_replace($this->card_number, '************', 0, 12);
    }

    public function formatDateCreate()
    {
        return date('d/m/Y', strtotime($this->created_at));
    }

    public function getState()
    {
        $data = [
            'country_id' => $this->country,
            'state_id' => $this->state
        ];

        return CountryStateHelper::getStateTitle($data);
    }

    public function getShippingState()
    {
        $data = [
            'country_id' => $this->shipping_country,
            'state_id' => $this->shipping_state
        ];

        return CountryStateHelper::getStateTitle($data);
    }

    public function getPdfContent($fullOrder=false){
        $order = $this;

        $viewFile='@frontend/views/shop/invoice.php';

        $content = \Yii::$app->controller->renderPartial($viewFile,[
            'order' => $order
        ]);

        return $content;
    }

    public function pay(){
        $url='https://pay.limitlessx.com/rest/v1/transactions';
        $key='3ba03815326089b71ea0cb58a97501a414bb366cff2afbe5ce01e6003ef8019b';

        $data = [
            'Authorization' => base64_encode($key),
            'userData' => [
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'email' => $this->email,
                'address' => $this->address,
                'country' => $this->country,
                'state' => $this->state,
                'city' => $this->city,
                'zip' => $this->zip,
                'phone' => $this->phone,
                'address1' => $this->address1,
                'ip' => $_SERVER['REMOTE_ADDR'],
//                'birthday' => '1983-02-22',
            ],
            'cardData' => [
                "name" => $this->first_name.' '.$this->last_name,
                "type" => self::getCreditCardType($this->card_number),
                "number" => $this->card_number,
                "month" => $this->expiration_month,
                "year" => $this->expiration_year,
                "cvv" => (($this->billing == 1)?$this->cvv:$this->cvv2),
            ],
            'subscription_status' => 0,
            'amount' => $this->total, // set your amount in format 99.99
            'currency' => 'USD', // ISO 4217 Currency code that indicates the currency of the transaction
            'ext_order_id' => $this->id,
        ];

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array('Authorization: Basic '.base64_encode($key), 'Content-Type: application/json'));
        $response_json = curl_exec($curl);

        $response=json_decode($response_json,true);

        if($response['status']=='APPROVED'){
            $this->payment_status=self::PAYMENT_APPROVED;
            $this->save();
        }else{
            $this->payment_status=self::PAYMENT_DECLINED;
            $this->save();
        }

        curl_close($curl);
    }

    public function payPhysical(){
        $url='https://pay.limitlessx.com/rest/orders/import';
        $key='3ba03815326089b71ea0cb58a97501a414bb366cff2afbe5ce01e6003ef8019b';
//        $campaignId=1;

        $data = [
            'Authorization'=>base64_encode($key),
            'firstName'=>$this->first_name,
            'lastName'=>$this->last_name,
            'address1'=>$this->address,
            'address2'=>$this->address1,
            'postalCode'=>$this->zip,
            'city'=>$this->city,
            'state'=>$this->state,
            'country'=>$this->country,
            'emailAddress'=>$this->email,
            'phoneNumber'=>$this->phone,
            'shipFirstName'=>$this->shipping_first_name,
            'shipLastName'=>$this->shipping_last_name,
            'shipAddress1'=>$this->shipping_address,
            'shipAddress2'=>$this->shipping_address1,
            'shipPostalCode'=>$this->shipping_zip,
            'shipCity'=>$this->shipping_city,
            'shipState'=>$this->shipping_state,
            'shipCountry'=>$this->shipping_country,
            'paySource'=>'CREDITCARD',
            'cardNumber'=>$this->card_number,
            'cardMonth'=>$this->expiration_month,
            'cardYear'=>$this->expiration_year,
            'cardSecurityCode'=>(($this->billing == 1)?$this->cvv:$this->cvv2),
            'ipAddress' => $_SERVER['REMOTE_ADDR'],
//            'campaignId'=>$campaignId,
        ];

        $i=1;
        foreach ($this->getOrderItems()->all() as $item) {
            $data['product'.$i.'_id']=$item->getExternalId();
            $data['product'.$i.'_qty']=$item->quantity;
            $data['product'.$i.'_price']=$item->price;
            $i++;
        }


        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER,
            array('Authorization: Basic '.base64_encode($key), 'Content-Type: application/json'));
        $response_json = curl_exec($curl);

        $response=json_decode($response_json,true);

        if($response['result']=='SUCCESS'){
            $this->payment_status=self::PAYMENT_APPROVED;
            $this->save();
        }else{
            $this->payment_status=self::PAYMENT_DECLINED;
            $this->save();
        }

        curl_close($curl);
    }

    public static function getCreditCardType($str, $format = 'string')
    {
        if (empty($str)) {
            return false;
        }

        $matchingPatterns = [
            2 => '/^4[0-9]{6,}$/',
            3 => '/^5[1-5][0-9]{5,}|222[1-9][0-9]{3,}|22[3-9][0-9]{4,}|2[3-6][0-9]{5,}|27[01][0-9]{4,}|2720[0-9]{3,}$/',
            1 => '/^3[47][0-9]{5,}$/',
//            'diners' => '/^3(?:0[0-5]|[68][0-9])[0-9]{11}$/',
            4 => '/^6(?:011|5[0-9]{2})[0-9]{12}$/',
//            'jcb' => '/^(?:2131|1800|35\d{3})\d{11}$/',
//            'any' => '/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/'
        ];

        $ctr = 1;
        foreach ($matchingPatterns as $key=>$pattern) {
            if (preg_match($pattern, $str)) {
                return $format == 'string' ? $key : $ctr;
            }
            $ctr++;
        }
    }
}
