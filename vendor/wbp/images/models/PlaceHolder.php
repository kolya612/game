<?php
/**
 * Created by PhpStorm.
 * User: kostanevazno
 * Date: 05.08.14
 * Time: 18:21
 *
 * TODO: check that placeholder is enable in module class
 * override methods
 */

namespace wbp\images\models;

/**
 * TODO: check path to save and all image method for placeholder
 */

use yii;

class PlaceHolder extends Image
{

    public $modelName = '';
    public $itemId = '';
    public $filePath = 'placeHolder.png';
    public $urlAlias = 'placeHolder';
    public $ext = 'png';


    /*  public function getUrl($size = false){
          $url = $this->getModule()->placeHolderUrl;
          if(!$url){
              throw new \Exception('PlaceHolder image must have url setting!!!');
          }
          return $url;
      }*/

    public function __construct()
    {
        $this->filePath = basename(Yii::getAlias($this->getModule()->placeHolderPath)) ;
    }

    public function getPathToOrigin()
    {

        $url = Yii::getAlias($this->getModule()->placeHolderPath);
        if (!$url) {
            throw new \Exception('PlaceHolder image must have path setting!!!');
        }
        return $url;
    }

    protected  function getSubDur(){
        return 'placeHolder';
    }
    public function setMain($isMain = true){
        throw new yii\base\Exception('You must not set placeHolder as main image!!!');
    }


    public function __toString()
    {
        return $this->filePath;
    }
}

