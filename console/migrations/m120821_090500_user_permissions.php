<?php

use yii\db\Migration;

class m120821_090500_user_permissions extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user_permissions}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->defaultValue(0),
            'module' => $this->string(250)->defaultValue(null),
            'controller' => $this->string(250)->defaultValue(null),
            'action' => $this->string(250)->defaultValue(null),
            'lock' => $this->smallInteger()->defaultValue(0)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%user_permissions}}');
    }
}
