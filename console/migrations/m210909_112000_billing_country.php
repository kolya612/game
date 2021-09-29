<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210909_112000_billing_country extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->alterColumn('{{%billings}}','state','VARCHAR(50) NULL DEFAULT NULL');
        $this->alterColumn('{{%billings}}','country','VARCHAR(50) NULL DEFAULT NULL');
    }

    public function down()
    {
        $this->alterColumn('{{%billings}}','state','INT(11) NULL DEFAULT NULL');
        $this->alterColumn('{{%billings}}','country','INT(11) NULL DEFAULT NULL');
    }
}
