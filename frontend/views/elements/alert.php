<?
$alert = '';
$types=[
    'success'=>'success',
    'error'=>'danger'
];
$flashes = Yii::$app->session->getAllFlashes();
foreach ($flashes as $flashType => $fl) {
    foreach ((array)$fl as $flash) {
        $uniqueId=uniqid();

        $alertMessage='<div id="'.$uniqueId.'" class="alert alert-'.$types[$flashType].' alert-outline alert-dismissible fade in show" role="alert">'.$flash.'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" class="la la-close"></span></button></div>';

        $alert .= <<<JS
            $('#alerts').append('{$alertMessage}');
            setTimeout(function(){
               $('#{$uniqueId} .close').click();
            },5000);
JS;
    }

}
$this->registerJs($alert, yii\web\View::POS_END);