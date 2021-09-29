<?php

use yii\db\Migration;

/**
 * Class m210811_112641_users_personal_info
 */
class m210811_112649_supplements_recomended extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('{{%supplements}}', 'goal', $this->integer()->defaultValue(NULL));
        $this->addColumn('{{%supplements}}', 'gender', $this->integer()->defaultValue(NULL));

    }

    public function down()
    {
        $this->dropColumn('{{%supplements}}', 'goal');
        $this->dropColumn('{{%supplements}}', 'gender');
    }
}
