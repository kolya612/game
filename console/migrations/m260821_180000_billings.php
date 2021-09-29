<?php

use yii\db\Migration;

class m260821_180000_billings extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%billings}}', [
            'id' => $this->primaryKey(),
            'member_id' => $this->integer()->defaultValue(null),
            'first_name' => $this->string(50)->defaultValue(null),
            'last_name' => $this->string(50)->defaultValue(null),
            'card_number' => $this->string(50)->defaultValue(null),
            'expiration_month' => $this->integer()->defaultValue(null),
            'expiration_year' => $this->integer()->defaultValue(null),
            'address' => $this->string(250)->defaultValue(null),
            'address1' => $this->string(250)->defaultValue(null),
            'city' => $this->string(50)->defaultValue(null),
            'country' => $this->integer()->defaultValue(null),
            'state' => $this->integer()->defaultValue(null),
            'zip' => $this->string(50)->defaultValue(null),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%billings}}');
    }
}