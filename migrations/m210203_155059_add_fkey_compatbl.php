<?php

use yii\db\Migration;

/**
 * Class m210203_155059_add_fkey_compatbl
 */
class m210203_155059_add_fkey_compatbl extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey('fk-model_printer', '{{%compatbl}}', 'model_printer', '{{%printer}}', 'id_printer', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk-model_cart', '{{%compatbl}}', 'model_cart', '{{%cartrige}}', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('storage_ibfk_1', 'storage', ['name'], 'cartrige', ['id']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-model_printer', 'compatbl');
        $this->dropForeignKey('fk-model_cart', 'compatbl');
      //  $this->dropForeignKey('storage_ibfk_1', 'storage');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210203_155059_add_fkey_compatbl cannot be reverted.\n";

        return false;
    }
    */
}
