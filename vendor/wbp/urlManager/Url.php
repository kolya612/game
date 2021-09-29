<?php

namespace wbp\urlManager;

class Url extends \yii\helpers\Url{

    public static function to($url = '', $scheme = false){
        $url=\yii\helpers\Url::to($url, false);

        if(\Yii::$app->lang->getLanguageUrlPrefix()){
            $first=substr($url, 0,1);
            $url=ltrim($url, '/');
            $url=\Yii::$app->lang->getLanguageUrlPrefix().'/'.$url;
            if($first=='/'){
                $url='/'.$url;
            }
        }

        return static::ensureScheme($url, $scheme);
    }
}
