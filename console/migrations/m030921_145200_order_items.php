<?php

use yii\db\Migration;

class m030921_145200_order_items extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%order_items}}', [
            'id' => $this->primaryKey(),
            'external_id' => $this->integer()->defaultValue(null),
            'order_id'=> $this->integer()->defaultValue(null),
            'item_id'=> $this->integer()->defaultValue(null),
            'type' => $this->string(20)->defaultValue(null),
            'title' => $this->string(250)->defaultValue(null),
            'goal' => $this->smallInteger()->defaultValue(null),
            'workout_often' => $this->smallInteger()->defaultValue(null),
            'gender' => $this->smallInteger()->defaultValue(null),
            'phase' => $this->smallInteger()->defaultValue(null),
            'price' => $this->decimal(12,2)->defaultValue(null),
            'percent' => $this->integer()->defaultValue(0),
            'old_price' => $this->decimal(12,2)->defaultValue(null),
            'quantity' => $this->integer()->defaultValue(0),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%order_items}}');
    }
}
