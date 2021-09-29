<?php

namespace wbp\cart;

use common\models\Data;
use wbp\dumper\Dumper;
use Yii;
use yii\base\BaseObject;
use yii\base\Component;
use yii\base\Event;
use yii\di\Instance;
use yii\web\Session;
use yz\shoppingcart\CartActionEvent;
use yz\shoppingcart\ShoppingCart;


/**
 * Class ShoppingCart
 * @property CartPositionInterface[] $positions
 * @property int $count Total count of positions in the cart
 * @property int $cost Total cost of positions in the cart
 * @property bool $isEmpty Returns true if cart is empty
 * @property string $hash Returns hash (md5) of the current cart, that is uniq to the current combination
 * of positions, quantities and costs
 * @property string $serialized Get/set serialized content of the cart
 * @package \yz\shoppingcart
 */
class Cart extends ShoppingCart
{
    public function getTotalRegularPrice()
    {
        $regular_price = 0;
        foreach ($this->getPositions() as $product) {
            $regular_price += $product->price * $product->getQuantity();
        }

        return $regular_price;
    }

    public function getTotalDiscountedPrice()
    {
        $discounted_price = 0;
        foreach ($this->getPositions() as $product) {
            $discounted_price += $product->sale() * $product->getQuantity();
        }

        return $discounted_price;
    }

    public function getTotalPrice()
    {
        $total_price = 0;
        foreach ($this->getPositions() as $product) {
            $total_price += $product->getCost(true);
        }

        return $total_price;
    }

    public function getShippableStatus()
    {
        foreach ($this->getPositions() as $product){
            if($product->shippable === true) {
                return true;
            }
        }

        return false;
    }
}
