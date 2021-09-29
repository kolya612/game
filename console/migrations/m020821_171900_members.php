<?php

use yii\db\Migration;

class m020821_171900_members extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%уmployees}}', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(50)->defaultValue(null),
            'last_name' => $this->string(50)->defaultValue(null),
            'email' => $this->string(50)->defaultValue(null),
            'password' => $this->string(50)->defaultValue(null),
            'invitation_code' => $this->string(50)->defaultValue(null),
            'gender' => $this->smallInteger()->defaultValue(0),
            'age' => $this->smallInteger()->defaultValue(0),
            'goal' => $this->smallInteger()->defaultValue(0),
            'workout_often' => $this->smallInteger()->defaultValue(0),
            'goal_weight' => $this->float()->defaultValue(0),
            'weight' => $this->float()->defaultValue(0),
            'height' => $this->float()->defaultValue(0),
            'status' => $this->smallInteger()->defaultValue(0),
            'created_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->datetime()->defaultExpression('CURRENT_TIMESTAMP')
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%уmployees}}');
    }
}