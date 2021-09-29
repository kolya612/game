<?php

use yii\db\Migration;

class m030821_173400_suplements extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%supplements}}', [
            'id' => $this->primaryKey(),
            'external_id' => $this->integer()->defaultValue(null),
            'title' => $this->string(250)->defaultValue(null),
            'short_text' => $this->string(250)->defaultValue(null),
            'text' => $this->text()->defaultValue(null),
            'benefits' => $this->text()->defaultValue(null),
            'ingredients' => $this->text()->defaultValue(null),
            'nutrition_facts' => $this->text()->defaultValue(null),
            'seo_title' => $this->string(250)->defaultValue(null),
            'seo_description' => $this->string(250)->defaultValue(null),
            'seo_keywords' => $this->string(250)->defaultValue(null),
            'price' => $this->float()->defaultValue(0),
            'sale_price' => $this->float()->defaultValue(0),
            'percent' => $this->integer()->defaultValue(0),
            'viewed' => $this->integer()->defaultValue(0),
            'status' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%supplements}}');
    }
}
