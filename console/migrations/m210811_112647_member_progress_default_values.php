<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112647_member_progress_default_values extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->alterColumn('{{%members_progress}}','weight','FLOAT NULL DEFAULT NULL');
        $this->alterColumn('{{%members_progress}}','fat','FLOAT NULL DEFAULT NULL');
    }

    public function down()
    {
        $this->alterColumn('{{%members_progress}}','weight','FLOAT NULL DEFAULT 0');
        $this->alterColumn('{{%members_progress}}','fat','FLOAT NULL DEFAULT 0');
    }
}
