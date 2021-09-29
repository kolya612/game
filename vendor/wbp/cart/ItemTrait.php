<?php

namespace wbp\cart;

use yii\base\Component;
use yz\shoppingcart\CartPositionTrait;

trait ItemTrait
{
    use CartPositionTrait;

    public function getPrice()
    {
        if (!empty($this->sale_price)){
            return $this->sale_price;
        } else {
            return $this->price;
        }
    }

    public function sale()
    {
        return $this->price - $this->getPrice();
    }

    public function getId()
    {
        return $this->id;
    }

}