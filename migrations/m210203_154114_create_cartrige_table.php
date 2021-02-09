<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%cartrige}}`.
 */
class m210203_154114_create_cartrige_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%cartrige}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(20),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%cartrige}}');
    }
}
