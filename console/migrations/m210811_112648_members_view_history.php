<?php

use yii\db\Expression;
use yii\db\Migration;

class m210811_112648_members_view_history extends Migration
{
    public function up()
    {
        $tableOptions = null;

        $this->createTable('{{%members_view_history}}', [
            'id' => $this->primaryKey(),
            'exercise_id' => $this->integer()->Null(),
            'member_id' => $this->integer()->Null(),
            'duration' => $this->integer()->Null(),
            'created_at' => $this->dateTime()->Null(),
            'updated_at' => $this->dateTime()->Null(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%members_view_history}}');
    }
}
