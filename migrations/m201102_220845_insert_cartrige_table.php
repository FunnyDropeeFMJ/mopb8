<?php

use yii\db\Migration;

/**
 * Class m201102_220845_insert_cartrige_table
 */
class m201102_220845_insert_cartrige_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('cartrige', ['id', 'model_name'], [
            [NULL,'85A'], 
            [NULL,'83A'], 
            [NULL,'226A']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('cartrige', ['id', 'model_name'], [
            [NULL,'85A'], 
            [NULL,'83A'], 
            [NULL,'226A']
        ]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201102_220845_insert_cartrige_table cannot be reverted.\n";

        return false;
    }
    */
}
