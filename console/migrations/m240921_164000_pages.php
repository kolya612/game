<?php

use yii\db\Migration;

class m240921_164000_pages extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pages}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250)->defaultValue(null),
            'status' => $this->integer()->defaultValue(null),
            'description' => $this->string()->defaultValue(null),
            'href' => $this->string(250)->defaultValue(null),
            'view' => $this->string(250)->defaultValue(null),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%pages}}');
    }
}