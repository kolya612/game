<?php

namespace wbp\imageUploader;

use wbp\uniqueOverlay\UniqueOverlay;
use wbp\uniqueOverlay\UniqueOverlayAsset;
use Yii;
use wbp\uploadifive\Uploadifive;
use yii\web\View;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * Uploadify Widget
 *
 */
class ImageUploader extends Widget
{

    public $style = '';
    public $data = [];
    public $type = '';
    public $item_id = 0;
    public $limit = 1000;
    public $uniqueId;
    public $buttonText1;
    public $buttonText2;
    public $callback,$showUrlSize,$showUrlEnable = false;
    
    public $getUrl=false;
    public $uploadUrl=false;

    public $jsOptions;

    public function run()
    {
        UniqueOverlayAsset::register($this->view);
        $this->uniqueId = uniqid('ImageUploader_');

        $loaderFunction = "function(){ reload_" . $this->uniqueId . "(); }";

        $function = "
            function reload_" . $this->uniqueId . "() {
                setTimeout(function(){
                    $.ajax({
                        url:'" . ($this->getUrl?$this->getUrl:Url::to(['getImage'])) . "',
                        data:{
                            'type':'" . $this->type . "',
                            'uniqueId':'" . $this->uniqueId . "',
                            'item_id':'" . $this->item_id . "',
                            'limit':'" . $this->limit . "',
                            'data':'" . json_encode($this->data) . "',
                            'tmp':true,
                            'showUrl':{
                                'showUrlEnable':'".$this->showUrlEnable."',
                                'size':'".$this->showUrlSize."'
                            }
                        },
                        type:'POST',
                        success:function(data){
                            $('#" . $this->uniqueId . "-files').html(data);
                            " . ($this->callback ? $this->callback . '();' : '') . "
                        }
                })
                
                },500);
            }
            
        ";

        $this->view->registerJs($function, View::POS_END);

        $return = Html::hiddenInput('image[]', $this->uniqueId);
        $return .=
            Uploadifive::widget([
                'url' => ($this->uploadUrl?$this->uploadUrl:Url::to(['uploadImage'])),
                'id' => $this->uniqueId,
                'style' => $this->style,
                'data' => $this->data,
                'csrf' => true,
                'jsOptions' => [
                    'multi' => (($this->limit==1)?false:true),
                    'width' => 'auto',
                    'height' => 'auto',
                    'buttonText' => '',
                    'buttonText1' => $this->buttonText1,
                    'buttonText2' => $this->buttonText2,
                    'formData' => ['type' => $this->type, 'uniqueId' => $this->uniqueId, 'item_id' => $this->item_id, 'limit' => $this->limit],
                    //'auto'=>false,
                    'onInit' => $loaderFunction,
                    'onUploadComplete' => $loaderFunction,
                    
                    'onError' => "function (a, b, c, d) {
                         if(b.xhr.statusText){
                             bootbox.alert(b.xhr.statusText);
                         }
                    }
                    ",
                ]
            ]);
        return $return;

    }

}
