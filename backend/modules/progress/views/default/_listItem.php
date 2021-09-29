<?
    use yii\helpers\Html;
    use wbp\widgets\RemoveButton;
?>

<tr>
    <td><?=$model->id ?></td>
    <td>
        <span style="width: 250px;">
            <div class="d-flex align-items-center">
                <? if($model->member->image->id){ ?>
                    <div class="symbol symbol-40 symbol-circle symbol-sm">
                        <img class="" src="<?=$model->member->image->getUrl('40x40')?>" alt="photo" />
                    </div>
                <? }else{ ?>
                    <div class="symbol symbol-40 symbol-circle <?=Yii::$app->params['lettersCollors'][strtoupper($model->member->getFirstName()[0])]?>">
                        <span class="symbol-label font-size-h4"><?=strtoupper($model->member->getFirstName()[0])?></span>
                    </div>
                <? } ?>
                <div class="ml-3">
                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0"><?=$model->member->getFirstName() ?> <?=$model->member->getLastName() ?></div>
                    <a href="#" class="text-muted font-weight-bold text-hover-primary">ID: <?=$model->member->getId() ?></a>
                </div>
            </div>
        </span>
    </td>
    <td style="text-align: center;" class="center">

        <? if($model->image->id){ ?>
            <div class="symbol symbol-40 symbol-circle symbol-sm">
                <img class="" src="<?=$model->getImage('progress_front')->getUrl('40x40')?>" alt="photo" />
            </div>
        <? }else{ ?>
            <div class="symbol symbol-40 symbol-circle <?=Yii::$app->params['lettersCollors']['F']?>">
                <span class="symbol-label font-size-h4">F</span>
            </div>
        <? } ?>

        <? if($model->image->id){ ?>
            <div class="symbol symbol-40 symbol-circle symbol-sm">
                <img class="" src="<?=$model->getImage('progress_side')->getUrl('40x40')?>" alt="photo" />
            </div>
        <? }else{ ?>
            <div class="symbol symbol-40 symbol-circle <?=Yii::$app->params['lettersCollors']["S"]?>">
                <span class="symbol-label font-size-h4">S</span>
            </div>
        <? } ?>

        <? if($model->image->id){ ?>
            <div class="symbol symbol-40 symbol-circle symbol-sm">
                <img class="" src="<?=$model->getImage('progress_back')->getUrl('40x40')?>" alt="photo" />
            </div>
        <? }else{ ?>
            <div class="symbol symbol-40 symbol-circle <?=Yii::$app->params['lettersCollors']["B"]?>">
                <span class="symbol-label font-size-h4">B</span>
            </div>
        <? } ?>

    </td>
    <td style="width: 10%; text-align: center;" class="center">
        <?=$model->weight ?>
    </td>
    <td style="width: 10%; text-align: center;" class="center">
        <?=$model->fat ?>
    </td>
    <td style="width: 10%; text-align: center;" class="center">
        <?=$model->date ?>
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

