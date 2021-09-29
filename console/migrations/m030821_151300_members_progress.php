<?php

use yii\db\Migration;

class m030821_151300_members_progress extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%members_progress}}', [
            'id' => $this->primaryKey(),
            'member_id' => $this->integer(10)->defaultValue(0),
            'weight' => $this->float()->defaultValue(0),
            'fat' => $this->float()->defaultValue(0),
            'date' => $this->date()->defaultValue(null),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%members_progress}}');
    }
}
