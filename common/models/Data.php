<?php
namespace common\models;


use wbp\dumper\Dumper;
use yii\base\Model;

class Data extends Model
{
    const GENDER = ['' => '-- not chosen --', 1 => 'male', 2 => 'female', 3 => 'both'];
    const WORKOUT_OFTEN = [1 => 'Once per week', 2 => 'Twice per week', 3 => '3 times per week', 5=>'5 times per week'];
    const WORKOUT_PLACE = [1 => 'Home', 2 => 'Outside', 3 => 'Gym'];
    const GOAL = [1 => 'Lose weight', 2 => 'Get weight', 3 => 'Get stronger', 4 => 'Keep in shape'];
    const PHASE = ['0' => '-- not chosen --', 1 => '1', 2 => '2'];
    const STATUS = ['' => '-- not chosen --', 0 => 'disabled', 1 => 'active'];
    const MONTH = [
        0 => 'Expiration month',
        1 => '01',
        2 => '02',
        3 => '03',
        4 => '04',
        5 => '05',
        6 => '06',
        7 => '07',
        8 => '08',
        9 => '09',
        10 => '10',
        11 => '11',
        12 => '12'
    ];

    const COLOR = [
        'red' => 'red',
        'green' => 'green',
        'orange' => 'orange',
    ];

    public static function yearsForCard()
    {
        $years = [0 => 'Expiration year'];

        for($i = 0; $i<12; $i++){
            $year = date('Y') + $i;
            $years[$year] = $year;
        }

        return $years;
    }

    public static function preparePrice($price)
    {
        $mass = explode('.',(string)$price);
        if(!isset($mass[1])) {
            $end = '00';
        } else {
            $end = $mass[1];
            if(!isset($end[1])){
                $end .= '0';
            }
        }

        return '$' . $mass[0] . '.' . $end;
    }
}