<?php

use yii\db\Migration;

/**
 * Class m210803_141512_add_settings_db_table
 */
class m210803_141512_add_settings_db_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if (Yii::$app->getDb()->getTableSchema('wbp_workout_plans', true) === null) {
            $this->createTable('wbp_workout_plans', [
                'id' => $this->primaryKey(),
                'title' => $this->string(64)->notNull()->defaultValue(''),
                'description' => $this->text(),
                'status' => $this->smallInteger()->defaultValue(0),
                'phase1' => $this->string()->notNull()->defaultValue(''),
                'phase2' => $this->string()->notNull()->defaultValue(''),
                'goal' => $this->smallInteger()->defaultValue(0),
                'sex' => $this->smallInteger()->defaultValue(0),
                'place' => $this->smallInteger()->defaultValue(0),
                'price' => $this->integer()->defaultValue(0),
                'isPaid' => $this->boolean()->defaultValue(false),
                'created_at' => $this->dateTime(),
            ]);
            $this->createIndex(
                'idx_status',
                'wbp_workout_plans',
                'status'
            );
            $this->createIndex(
                'idx_created_at',
                'wbp_workout_plans',
                'created_at'
            );
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210803_141512_add_settings_db_table cannot be reverted.\n";

        return false;
    }
    */
}
