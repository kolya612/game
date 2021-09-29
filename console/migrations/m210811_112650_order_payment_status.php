<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112650_order_payment_status extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%orders}}', 'payment_status', $this->tinyInteger()->defaultValue(NULL));
        $this->alterColumn('{{%orders}}','state','VARCHAR(255) NULL DEFAULT NULL');
        $this->alterColumn('{{%orders}}','country','VARCHAR(255) NULL DEFAULT NULL');
        $this->alterColumn('{{%orders}}','shipping_state','VARCHAR(255) NULL DEFAULT NULL');
        $this->alterColumn('{{%orders}}','shipping_country','VARCHAR(255) NULL DEFAULT NULL');

    }

    public function down()
    {
        $this->dropColumn('{{%orders}}', 'payment_status');
        $this->alterColumn('{{%orders}}','state','INT(11) NULL DEFAULT NULL');
        $this->alterColumn('{{%orders}}','country','INT(11) NULL DEFAULT NULL');
        $this->alterColumn('{{%orders}}','shipping_state','INT(11) NULL DEFAULT NULL');
        $this->alterColumn('{{%orders}}','shipping_country','INT(11) NULL DEFAULT NULL');
    }
}
