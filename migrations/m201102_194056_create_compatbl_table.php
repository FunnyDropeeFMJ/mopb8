<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%compatbl}}`.
 */
class m201102_194056_create_compatbl_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%compatbl}}', [
            'model_cart' => $this->string(50),
            'model_printer' => $this->string(50),
        ]);
    // add index key for table 'compatbl'
        $this->createIndex('idx-model_cart', 'compatbl', 'model_cart');
        $this->createIndex('idx-model_printer', 'compatbl', 'model_printer');
        
    // add foreignKey key for table 'compatbl' 'cartrige'
       $this->addForeignKey('fk-model_cart-model_cartrige', '{{%compatbl}}', 'model_cart', '{{%cartrige}}', 'model_name', 'CASCADE', 'CASCADE');
           // add foreignKey key for table 'compatbl' 'cartrige'
       $this->addForeignKey('fk-model_printer-printer_name', '{{%compatbl}}', 'model_printer', '{{%printer}}', 'printer_name', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%compatbl}}');
        $this->dropForeignKey('fk-model_cart-model_cartrige', '{{%compatbl}}');
        $this->dropForeignKey('fk-model_printer-printer_name', 'compatbl');
    }
}
