<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112643_member_register_step extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%members}}', 'register_step', $this->integer()->Null());
        $this->addColumn('{{%members}}', 'password_reset_token', $this->string()->unique());

        $this->alterColumn('{{%members}}','gender','SMALLINT(6) NULL DEFAULT NULL');
        $this->alterColumn('{{%members}}','age','SMALLINT(6) NULL DEFAULT NULL');
        $this->alterColumn('{{%members}}','goal','SMALLINT(6) NULL DEFAULT NULL');
        $this->alterColumn('{{%members}}','workout_often','SMALLINT(6) NULL DEFAULT NULL');
        $this->alterColumn('{{%members}}','goal_weight','FLOAT NULL DEFAULT NULL');
        $this->alterColumn('{{%members}}','weight','FLOAT NULL DEFAULT NULL');
        $this->alterColumn('{{%members}}','height','FLOAT NULL DEFAULT NULL');

    }

    public function down()
    {
        $this->dropColumn('{{%members}}', 'register_step');
        $this->dropColumn('{{%members}}', 'password_reset_token');

        $this->alterColumn('{{%members}}','gender','SMALLINT(6) NULL DEFAULT 0');
        $this->alterColumn('{{%members}}','age','SMALLINT(6) NULL DEFAULT 0');
        $this->alterColumn('{{%members}}','goal','SMALLINT(6) NULL DEFAULT 0');
        $this->alterColumn('{{%members}}','workout_often','SMALLINT(6) NULL DEFAULT 0');
        $this->alterColumn('{{%members}}','goal_weight','FLOAT NULL DEFAULT 0');
        $this->alterColumn('{{%members}}','weight','FLOAT NULL DEFAULT 0');
        $this->alterColumn('{{%members}}','height','FLOAT NULL DEFAULT 0');
    }
}
