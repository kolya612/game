<?php

use yii\db\Migration;

class m090821_085300_exercises_excategories extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%exercises_excategories}}', [
            'id' => $this->primaryKey(),
            'exercise_id' => $this->integer()->defaultValue(0),
            'excategory_id' => $this->integer()->defaultValue(0)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%exercises_excategories}}');
    }
}
