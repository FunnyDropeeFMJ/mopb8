<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cartrige}}`.
 */
class m201102_183837_create_cartrige_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cartrige}}', [
            'id' => $this->primaryKey(),
            'model_name' => $this->string(50),
        ]);
        $this->createIndex('idx-cartrige', 'cartrige', 'model_name');
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cartrige}}');
    }
}
