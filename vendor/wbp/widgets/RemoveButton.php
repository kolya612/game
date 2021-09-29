<?php

namespace wbp\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;


/**
 * Uploadify Widget
 *
 */
class RemoveButton extends Widget {

    public $linkOptions;
    public $ajax=true;
    public $text='Are you sure want to delete this item?';
    public $textSuccessTitle='Deleted!';
    public $textSuccess='Your item has been deleted.';
    public $textCancelTitle='Cancelled';
    public $textCancel='Your imaginary item is safe :)';
    public $id;
    /**
     * Initializes the widget.
     */
    public function init() {
        if(!$this->id) $this->id=uniqid('removeButton_');

        parent::init();
    }

    /**
     * Renders the widget.
     */
    public function run() {
        $this->registerScripts();
        echo $this->renderLink();
    }


    /**
     * render file input tag
     * @return string
     */
    private function renderLink() {
        if(!isset($this->linkOptions['url'])){
            $result=Html::button($this->linkOptions['text'],ArrayHelper::merge($this->linkOptions['options'],['id'=>$this->id,'data-pjax'=>0]));
        }else{
            $result=Html::a($this->linkOptions['text'],$this->linkOptions['url'],ArrayHelper::merge($this->linkOptions['options'],['id'=>$this->id,'data-pjax'=>0]));
        }
        return $result;
    }

    /**
     * register script
     */
    private function registerScripts() {
        $script = <<<EOF
            $('#{$this->id}').click(function(){
                var thisObj=$(this);
                
                swal({
                    title: "{$this->text}",
                    text: "",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, do it!',
                    cancelButtonText: 'No, cancel!',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false,
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
EOF;
            if($this->ajax)
                $script .= <<<EOF
                         $.ajax({url:thisObj.attr('href'),method:'GET',success:function(data){
                            swal(
                                '{$this->textSuccessTitle}',
                                '{$this->textSuccess}',
                                'success'
                            );
                            $('.pjax-container').each(function(){
                                $.pjax.reload({container:"#"+$(this).attr('id'), history:false, timeout: 10000});
                            });
                        }});
EOF;
            else
                $script .= <<<EOF
                    if(!thisObj.attr('href')){
                        $(this).parents('form').submit();
                    }else{
                        document.location.href=thisObj.attr('href');
                    }
EOF;
                $script .= <<<EOF
                    } else if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.cancel
                    ) {
                        swal(
                            '{$this->textCancelTitle}',
                            '{$this->textCancel}',
                            'error'
                        );
                    }
                })

                return false;
            });
EOF;
        $this->view->registerJs($script, View::POS_END);
    }

}
