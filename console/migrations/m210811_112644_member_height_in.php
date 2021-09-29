<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112644_member_height_in extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%members}}', 'height_in', $this->float()->defaultValue(NULL));

    }

    public function down()
    {
        $this->dropColumn('{{%members}}', 'height_in');
    }
}
