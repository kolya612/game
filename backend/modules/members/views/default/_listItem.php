<?
    use yii\helpers\Html;
    use wbp\widgets\RemoveButton;
    use common\models\Data;
?>
<tr>
    <td><?=$model->id ?></td>
    <td>
        <span style="width: 250px;">
            <div class="d-flex align-items-center">
                <? if($model->image->id){ ?>
                    <div class="symbol symbol-40 symbol-circle symbol-sm">
                        <img class="" src="<?=$model->image->getUrl('40x40')?>" alt="photo" />
                    </div>
                <? }else{ ?>
                    <div class="symbol symbol-40 symbol-circle <?=Yii::$app->params['lettersCollors'][strtoupper($model->first_name[0])]?>">
                        <span class="symbol-label font-size-h4"><?=strtoupper($model->first_name[0])?></span>
                    </div>
                <? } ?>
                <div class="ml-3">
                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0"><?=$model->first_name ?> <?=$model->last_name ?></div>
                    <a href="#" class="text-muted font-weight-bold text-hover-primary"><?=$model->genderName?>, <?=$model->age?></a>
                </div>
            </div>
        </span>

    </td>
    <td style="width: 10%; text-align: center;" class="center">
        <?=$model->email ?>
    </td>
    <td style="width: 10%; text-align: center;" class="center">
        <?=$model->getGoalTitle() ?>
    </td>
    <td nowrap="nowrap" style="width: 15%; text-align: center;" class="center">
        <a href="<?=$model::ACTION?>/default/edit?id=<?=$model->id ?>" data-pjax="0" class="btn btn-sm btn-clean btn-icon" title="Edit">
            <i class="la la-edit"></i>
        </a>

        <? echo RemoveButton::widget([
                'text'=>Yii::$app->controller->module->deleteConfirmationText,
                'textSuccess'=>Yii::$app->controller->module->deleteSuccessText,
                'textCancel'=>Yii::$app->controller->module->deleteCancelText,
                'linkOptions' => [
                    'text' => '<i class="la la-trash"></i>',
                    'url' => ['remove', 'id' => $model->id],
                    'options' => ['class' => 'btn btn-sm btn-clean btn-icon delete_link']
                ],
                'ajax' => true
            ]);?>

    </td>
</tr>
