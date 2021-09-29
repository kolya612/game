<?
use yii\helpers\Html;
use wbp\widgets\RemoveButton;
?>
<tr>
    <td style="width: 30px"><?=$model->id ?></td>
    <td>
        <span style="width: 250px;">
            <div class="d-flex align-items-center">
                <? if($model->image->id){ ?>
                    <div class="symbol symbol-40 symbol-circle symbol-sm">
                        <img class="" src="<?=$model->image->getUrl('40x40')?>" alt="photo" />
                    </div>
                <? }else{ ?>
                    <div class="symbol symbol-40 symbol-circle <?=Yii::$app->params['lettersCollors'][strtoupper($model->title[0])]?>">
                        <span class="symbol-label font-size-h4"><?=strtoupper($model->title[0])?></span>
                    </div>
                <? } ?>
                <div class="ml-3">
                    <div class="text-dark-75 font-weight-bolder font-size-lg mb-0"><?=$model->title ?></div>
                </div>
            </div>
        </span>
    </td>
    <td style="text-align: center;"><?=$model->sort ?></td>
    <td nowrap="nowrap" style="width: 15%; text-align: center;" class="center">
        <a href="<?=$model::ACTION?>/default/edit?id=<?=$model->id ?>" class="btn btn-sm btn-clean btn-icon" title="Edit">
            <i class="la la-edit"></i>
        </a>
        <a href="<?=$model::ACTION?>/default/remove?id=<?=$model->id ?>" title="Delete" class="btn btn-sm btn-clean btn-icon delete_link" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?">
            <i class="la la-trash"></i>
        </a>
    </td>
</tr>