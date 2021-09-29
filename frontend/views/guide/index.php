<section class="dashboard pp bg-white estimate-body">
    <div class="container">
        <div class="estimate-body__header">
            <div class="row align-items-center mb-2">
                <div class="col-6 col-md-8">
                    <h1 class="title"><?=$model->title?></h1>
                </div>
                <div class="col-6 col-md-4 text-right">
                    <?= $this->render('../elements/checkin-button') ?>
                </div>
            </div>
        </div>
        <br />
        <?=$model->description?>
    </div>
</section>
