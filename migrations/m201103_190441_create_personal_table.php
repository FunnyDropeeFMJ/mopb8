<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%personal}}`.
 */
class m201103_190441_create_personal_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%personal}}', [
            'id' => $this->primaryKey(),
            'personal_name' => $this->string(30),
            'post' => $this->string(20),
            'id_depart_n' => $this->smallInteger(8),
        ]);
    $this->alterColumn('{{%personal}}', 'id', $this->smallInteger(8).' NOT NULL AUTO_INCREMENT');
    $this->createIndex('idx-id_depart_n', 'personal', 'id_depart_n');
    $this->createIndex('idx-personal_name', '{{%personal}}', 'personal_name', $unique = true);
    $this->addForeignKey('fk-id_depart_n-name_depart', '{{%personal}}', 'id_depart_n', '{{%depart}}', 'id', 'CASCADE', 'CASCADE');
    
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%personal}}');
        $this->dropPrimaryKey('fk-id_depart_n-name_depart','{{%personal}}');
    }
}
