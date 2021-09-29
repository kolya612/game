<?php

use yii\db\Migration;

class m020821_174700_images_sizes extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%images_sizes}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250)->defaultValue(null),
            'aspect_ratio' => $this->string(250)->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(null),
            'added_date' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_date' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'type' => $this->string(250)->defaultValue(null)
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%images_sizes}}');
    }
}
