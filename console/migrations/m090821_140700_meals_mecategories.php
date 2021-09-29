<?php

use yii\db\Migration;

class m090821_140700_meals_mecategories extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%meals_mecategories}}', [
            'id' => $this->primaryKey(),
            'meal_id' => $this->integer()->defaultValue(0),
            'mecategory_id' => $this->integer()->defaultValue(0)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%meals_mecategories}}');
    }
}
