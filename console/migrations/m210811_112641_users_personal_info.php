<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112641_users_personal_info extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%user}}', 'first_name', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'last_name', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'phone', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'position', $this->string()->defaultValue(null));
        $this->addColumn('{{%user}}', 'super_admin', $this->smallInteger()->defaultValue(0));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'first_name');
        $this->dropColumn('{{%user}}', 'last_name');
        $this->dropColumn('{{%user}}', 'phone');
        $this->dropColumn('{{%user}}', 'position');
        $this->dropColumn('{{%user}}', 'super_admin');
    }
}
