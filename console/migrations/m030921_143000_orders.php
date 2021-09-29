<?php

use yii\db\Migration;

class m030921_143000_orders extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'member_id' => $this->integer()->defaultValue(null),
            'email' => $this->string(60)->defaultValue(null),
            'phone' => $this->string(30)->defaultValue(null),
            'shipping_first_name' => $this->string(50)->defaultValue(null),
            'shipping_last_name' => $this->string(50)->defaultValue(null),
            'shipping_country' => $this->integer()->defaultValue(null),
            'shipping_address' => $this->string(250)->defaultValue(null),
            'shipping_address1' => $this->string(250)->defaultValue(null),
            'shipping_city' => $this->string(50)->defaultValue(null),
            'shipping_state' => $this->integer()->defaultValue(null),
            'shipping_zip' => $this->string(50)->defaultValue(null),
            'card_number' => $this->string(50)->defaultValue(null),
            'expiration_month' => $this->integer()->defaultValue(null),
            'expiration_year' => $this->integer()->defaultValue(null),
            'first_name' => $this->string(50)->defaultValue(null),
            'last_name' => $this->string(50)->defaultValue(null),
            'country' => $this->integer()->defaultValue(null),
            'address' => $this->string(250)->defaultValue(null),
            'address1' => $this->string(250)->defaultValue(null),
            'city' => $this->string(50)->defaultValue(null),
            'state' => $this->integer()->defaultValue(null),
            'zip' => $this->string(50)->defaultValue(null),
            'total' => $this->float()->defaultValue(null),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%orders}}');
    }
}