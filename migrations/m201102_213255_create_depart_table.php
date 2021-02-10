<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%depart}}`.
 */
class m201102_213255_create_depart_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%depart}}', [
            'id' => $this->primaryKey(),
            'id_name_depart' => $this->string(50),
        ]);
    $this->createIndex('idx-id', '{{%depart}}', 'id');  
    $this->createIndex('idx-n_depart', '{{%depart}}', 'id_name_depart', $unique = true);
    $this->alterColumn('{{%depart}}', 'id', $this->smallInteger(8).' NOT NULL AUTO_INCREMENT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('{{%depart}}');

    }
}
