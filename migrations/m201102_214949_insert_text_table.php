<?php

use yii\db\Migration;

/**
 * Class m201102_214949_insert_text_table
 */
class m201102_214949_insert_text_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $this->batchInsert('printer', ['id', 'inventory_id','id_printer','printer_name','serv_number'], [
            ['1','1234','','Canon','214124'], 
            ['2','4312','Samsung','123123'], 
            ['3','4125','Kenon','2341']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('printer', ['id', 'inventory_id','printer_name','serv_number'], [
            ['1','1234','Canon','214124'], 
            ['2','4312','Samsung','123123'], 
            ['3','4125','Kenon','2341']
        ]);
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201102_214949_insert_text_table cannot be reverted.\n";

        return false;
    }
    */
}
