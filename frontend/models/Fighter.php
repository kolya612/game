<?php

namespace frontend\models;

use wbp\dumper\Dumper;
use Yii;
use yii\base\Model;

class Fighter extends Model
{
    public $id;
    public $title;
    public $life;
    public $magic;
    public $agility;
    public $strength;
    public $intelligence;
    public $hit1;
    public $hit2;
    public $protection;

    public function __construct($setting)
    {
        $this->id = $this->generetId();
        $this->title = $setting->nick_name ? $setting->nick_name : $setting->title;
        $this->life = $setting->life??0;
        $this->magic = $setting->magic??0;
        $this->agility = $setting->agility??0;
        $this->strength = $setting->strength??0;
        $this->intelligence = $setting->intelligence??0;
    }

    public function getFighterMass()
    {
        return array(
            'id' => $this->id,
            'title' => $this->title,
            'life' => $this->life,
            'magic' => $this->magic,
            'agility' => $this->agility,
            'strength' => $this->strength,
            'intelligence' => $this->intelligence
        );
    }

    public function generetId()
    {
        return random_int(1, 1000) + random_int(1, 1000) + random_int(1, 1000);
    }
}