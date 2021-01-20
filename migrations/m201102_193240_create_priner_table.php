<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%priner}}`.
 */
class m201102_193240_create_priner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%printer}}', [
            'id' => $this->primaryKey(),
            'inventory_id' => $this->string(20),
            'printer_name' => $this->string(20),
            'serv_number' => $this->string(20),
        ]);
        $this->createIndex('idx-printer_name', 'printer', 'printer_name');
       

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pritner}}');
    }
}
