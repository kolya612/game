<?php

?>

<div class="dropdown">
    <button class="btn check_in dropdown-toggle" type="button" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-plus"></i> Check-in
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="<?=\yii\helpers\Url::to(['my-progress/add-photo'])?>">Photo</a>
        <a class="dropdown-item" onclick="$('#popup_weight').modal('show');return false;" href="#">Weight</a>
        <a class="dropdown-item" onclick="$('#popup_body-fat').modal('show');return false;" href="#">Body Fat</a>
    </div>
</div>
