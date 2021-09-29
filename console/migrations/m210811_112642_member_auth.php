<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112642_member_auth extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%members}}', 'auth_key', $this->string(32)->notNull());
        $this->addColumn('{{%members}}', 'password_hash', $this->string()->notNull());
        $this->addColumn('{{%members}}', 'password_reset_token', $this->string()->unique());
        $this->dropColumn('{{%members}}', 'password');
    }

    public function down()
    {
        $this->dropColumn('{{%members}}', 'auth_key');
        $this->dropColumn('{{%members}}', 'password_hash');
        $this->dropColumn('{{%members}}', 'password_reset_token');
        $this->addColumn('{{%members}}', 'password', $this->string(50)->defaultValue(null));
    }
}
