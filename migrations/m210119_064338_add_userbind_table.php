<?php

use yii\db\Migration;

/**
 * Class m210119_064338_add_userbind_table
 */
class m210119_064338_add_userbind_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%userbind}}', [
            'id_userbind' => $this->primaryKey(),
            'id_depart' => $this->string(),
            'user_name' => $this->integer(11),
        ]);
    $this->createIndex('idx-id_depart', '{{%userbind}}', 'id_depart');  
    $this->createIndex('idx-user_name', '{{%userbind}}', 'user_name');
    $this->alterColumn('{{%userbind}}', 'id_userbind', $this->smallInteger(8).' NOT NULL AUTO_INCREMENT');
    $this->alterColumn('{{%userbind}}', 'id_depart', $this->smallInteger(8));
    $this->addForeignKey('fk-userbind-id_depart', '{{%userbind}}', 'id_depart', '{{%depart}}', 'id', 'CASCADE', 'CASCADE');
    $this->addForeignKey('fk-userbind-user_name', '{{%userbind}}', 'user_name', '{{%user}}', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%userbind}}');
        $this->dropForeignKey('fx_userbind', 'task_user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210119_064338_add_userbind_table cannot be reverted.\n";

        return false;
    }
    */
}
