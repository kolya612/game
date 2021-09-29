<?
$this->title=Yii::$app->controller->module->getSeoTitle();
?>

<?=$this->render('@backend/views/layouts/page_header',[
    'title'=>Yii::$app->controller->module->editPageTitle,
    'model'=>$formModel,
    'breadcrumbs'=>[
        ['label' => 'Manage', 'url' => ['index']],
        ['label' => Yii::$app->controller->module->editPageTitle],
    ],
    'quickActions'=>[]
])?>

<section class="page-content container-fluid">

    <?= $this->render(Yii::$app->controller->formView, ['formModel' => $formModel,'formModel'=>$formModel,'model'=>$model,'permissions'=>$permissions,'modules'=>$modules]) ?>

</section>