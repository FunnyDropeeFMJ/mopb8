<?php

use yii\db\Migration;

/**
 * Class m210121_081731_add_storage_table
 */
class m210121_081731_add_storage_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%storage}}', [
            'id' => $this->primaryKey(),
            'name' => $this->integer(11),
            'count' => $this->integer(10),
        ]);
        $this->alterColumn('{{%storage}}', 'id', $this->integer(11).'AUTO_INCREMENT');

       

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%storage}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210121_081731_add_storage_table cannot be reverted.\n";

        return false;
    }
    */
}
