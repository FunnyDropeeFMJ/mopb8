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
            'id_printer' => $this->integer(10),
            'printer_name' => $this->string(20),
            'serv_number' => $this->string(20),
        ]);
        $this->createIndex('idx-id_printer', 'printer', 'id_printer');
       

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pritner}}');
    }
}
