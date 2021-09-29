<?php

use yii\db\Migration;

/**
 * Class m210803_100714_add_workout_plan_db_table
 */
class m210803_100714_add_workout_plan_db_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Yii::$app->getDb()->getTableSchema('wbp_settings', true) === null) {
            $this->createTable('wbp_settings', [
                'id' => $this->primaryKey(),
                'username' => $this->string(128)->notNull()->defaultValue(''),
                'host' => $this->string(128)->notNull()->defaultValue(''),
                'password' => $this->string(255)->notNull()->defaultValue(''),
                'port' => $this->smallInteger()->defaultValue(0),
                'useSsl' => $this->boolean()->defaultValue(false),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropTable('wbp_settings');
    }

}
