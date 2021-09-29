<?
    use yii\helpers\Html;
    use wbp\widgets\RemoveButton;
    use common\models\Data;
?>
<tr>
    <td><?=$model->first_name ?></td>
    <td><?=$model->last_name ?></td>
    <td style="width: 10%; text-align: center;" class="center">
        <?=$model->email ?>
    </td>
    <td nowrap="nowrap" style="width: 15%; text-align: center;" class="center">
        <a href="<?=$this->context->module->action?>/default/edit?id=<?=$model->id ?>" class="btn btn-sm btn-clean btn-icon" title="Edit">
            <i class="la la-edit"></i>
        </a>
        <a href="<?=$this->context->module->action?>/default/remove?id=<?=$model->id ?>" title="Delete" class="btn btn-sm btn-clean btn-icon delete_link" aria-label="Delete" data-pjax="0" data-confirm="Are you sure you want to delete this item?">
            <i class="la la-trash"></i>
        </a>
    </td>
</tr>
