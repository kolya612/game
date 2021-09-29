<?php

use yii\db\Migration;

class m040821_174400_excategories extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%excategories}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250)->defaultValue(null),
            'color' => $this->string(50)->defaultValue(null),
            'sort' => $this->integer()->defaultValue(0),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%excategories}}');
    }
}
