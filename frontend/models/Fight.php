<?php

namespace frontend\models;

use wbp\dumper\Dumper;
use Yii;
use yii\base\Model;

class Fight extends Model
{
    public $message;

    public function __construct($data,$first,$second)
    {
        $session = Yii::$app->session;

        //дополним объекты бойцов данными удара

        $first->hit1 = $data['hit'];
        $first->hit2 = false;
        $first->protection = $data['protection'];

        $second->hit1 = random_int(1,3);
        $second->hit2 = false;
        $second->protection = random_int(1,3);

        $uron_first = $this->udar($first,$second);

        Dumper::ddd($data);


        //сначала отработаем удар по монстру
        //попали ему в щит или нет?




        //если в щит не попали то сам удар
    }

    public function udar($first,$second)
    {
        $uron1 = 0; // это урон от оружия

        $popal1 = 50;
        $popal1 = $popal1 + $first->intelligence * 10;
        $popal1 = $popal1 - $second->intelligence - $second->agility * 5;

        if ($popal1>90) {
            $popal1 = 90;
        }
        if ($popal1 < 15) {
            $popal1 = 15;
        }

        $this->message[] = '% Попадения ' . $popal1;

        $rand = random_int(0 , 100);
        if ($popal1>=$rand) {
            $popal1 = true;
            $this->message[] = 'Попал';
        } else {
            $popal1 = false;
            $this->message[] = 'Не попал';
        }

        if ($popal1) {
            $krit = 0;
            $krit = $krit + $first->strength * 5;
            $krit = $krit - $second->intelligence - $second->strength * 5;
            if ($krit>80) {
                $krit = 80;
            }
            if ($krit < 10) {
                $krit = 10;
            }

            $this->message[] = '% Крита ' . $krit;

            $rand = random_int(0 , 100);
            if ($krit>=$rand) {
                $this->message[] = 'Критонул <br />';
                $krit = true;
            } else {
                $this->message[] = 'Не критонул <br />';
                $krit = false;
            }


            $uron = $first->strength + $uron1;
            if ($krit) {
                $uron = $uron * 2;
            }

            $uron_from = round(($uron*8)/10);
            $uron_to = round(($uron*12)/10);

            $uron = random_int($uron_from,$uron_to);

            return $uron . " ($uron_from - $uron_to)";
        } else {
            return 0;
        }
    }
}