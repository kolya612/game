<?php

use yii\db\Migration;

class m090821_084200_exercises extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%exercises}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(250)->defaultValue(null),
            'time' => $this->string(20)->defaultValue(null),
            'short_text' => $this->string(250)->defaultValue(null),
            'video' => $this->string(250)->defaultValue(null),
            'seo_title' => $this->string(250)->defaultValue(null),
            'seo_description' => $this->string(250)->defaultValue(null),
            'seo_keywords' => $this->string(250)->defaultValue(null),
            'text' => $this->text()->defaultValue(null),
            'status' => $this->smallInteger()->defaultValue(1),
            'viewed' => $this->integer()->defaultValue(0),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%exercises}}');
    }
}
