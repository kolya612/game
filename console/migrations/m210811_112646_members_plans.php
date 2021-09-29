<?php

use yii\db\Expression;
use yii\db\Migration;

class m210811_112646_members_plans extends Migration
{
    public function up()
    {
        $tableOptions = null;

        $this->createTable('{{%member_plans}}', [
            'id' => $this->primaryKey(),
            'plan_type' => $this->integer()->Null(),
            'plan_id' => $this->integer()->Null(),
            'member_id' => $this->integer()->Null(),
            'is_free' => $this->tinyInteger()->Null(),
            'status' => $this->tinyInteger()->Null(),
            'created_at' => $this->dateTime()->Null(),
            'updated_at' => $this->dateTime()->Null(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%member_plans}}');
    }
}
