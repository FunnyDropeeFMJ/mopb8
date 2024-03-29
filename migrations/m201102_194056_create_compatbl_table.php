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
            'id' => $this->primaryKey(),
            'model_cart' => $this->integer(10),
            'model_printer' => $this->integer(10),
        ]);
    // add index key for table 'compatbl'
        // $this->createIndex('idx-model_cart', 'compatbl', 'model_cart');
        // $this->createIndex('idx-model_printer', 'compatbl', 'model_printer');
        
    // add foreignKey key for table 'compatbl' 'cartrige'
    //    $this->addForeignKey('fk-model_cart-model_cartrige', '{{%compatbl}}', 'model_cart', '{{%cartrige}}', 'model_name', 'CASCADE', 'CASCADE');
           // add foreignKey key for table 'compatbl' 'cartrige'
       
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%compatbl}}');
       
    }
}
