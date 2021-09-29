<?php

use yii\db\Migration;

class m040821_174600_supplements_supcategories extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%supplements_supcategories}}', [
            'id' => $this->primaryKey(),
            'supplement_id' => $this->integer()->defaultValue(0),
            'supcategory_id' => $this->integer()->defaultValue(0)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%supplements_supcategories}}');
    }
}
