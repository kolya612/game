<?php

use yii\db\Migration;

class m090821_172300_members_auth extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%members_auth}}', [
            'id' => $this->primaryKey(),
            'member_id' => $this->integer()->defaultValue(0),
            'source' => $this->string(250)->defaultValue(null),
            'source_id' => $this->string(250)->defaultValue(null)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%members_auth}}');
    }
}
