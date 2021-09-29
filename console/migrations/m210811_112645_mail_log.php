<?php

use yii\db\Expression;
use yii\db\Migration;

class m210811_112645_mail_log extends Migration
{
    public function up()
    {
        $tableOptions = null;

        $this->createTable('{{%mail_log}}', [
            'id' => $this->primaryKey(),
            'from_email' => $this->string(255)->Null(),
            'from_name' => $this->string(255)->Null(),
            'to_email' => $this->string(255)->Null(),
            'to_name' => $this->string(255)->Null(),
            'template_id' => $this->integer()->Null(),
            'subject' => $this->string(255)->Null(),
            'message' => $this->text()->Null(),
            'sentUrl' => $this->string(255)->Null(),
            'attaches' => $this->text()->Null(),
            'raw' => $this->text()->Null(),
            'logger_dump' => $this->text()->Null(),
            'result' => $this->text()->Null(),
            'created_at' => $this->dateTime()->Null(),
            'updated_at' => $this->dateTime()->Null(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%mail_log}}');
    }
}
