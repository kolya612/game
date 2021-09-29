<?php

use yii\db\Migration;

class m090821_135900_files extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%files}}', [
            'id' => $this->primaryKey(),
            'item_id' => $this->integer()->defaultValue(null),
            'type' => $this->string(250)->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null),
            'deleted' => $this->smallInteger()->defaultValue(null),
            'unique_id' => $this->string(250)->defaultValue(null),
            'name' => $this->string(250)->defaultValue(null),
            'ext' => $this->string(250)->defaultValue(null),
            'created_at' => $this->datetime()->defaultValue(null),
            'updated_at' => $this->datetime()->defaultValue(null),
            'parent' => $this->integer()->defaultValue(null),
            'sort' => $this->integer()->defaultValue(null),
            'added_date' => $this->datetime()->defaultValue(null),
            'updated_date' => $this->datetime()->defaultValue(null),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%files}}');
    }
}
