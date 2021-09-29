<?php

use yii\db\Migration;

class m120821_090200_user_log extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_log}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->defaultValue(0),
            'module' => $this->string(250)->defaultValue(null),
            'action' => $this->string(250)->defaultValue(null),
            'additional_options' => $this->text()->defaultValue(null),
            'item_id' => $this->text()->defaultValue(null),
            'ip' => $this->string(250)->defaultValue(null),
            'server' => $this->text()->defaultValue(null),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user_log}}');
    }
}
