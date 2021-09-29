<?php

namespace wbp\dumper;

use yii\base\Component;

class Dumper extends Component
{
    public static function dd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
    public static function ddd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }

    //   \wbp\dumper\Dumper::ddd(1111);
}