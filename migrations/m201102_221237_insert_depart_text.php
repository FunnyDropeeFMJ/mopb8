<?php

use yii\db\Migration;

/**
 * Class m201102_221237_insert_depart_text
 */
class m201102_221237_insert_depart_text extends Migration
{

    public function safeUp()
    {
         $this->batchInsert('depart', ['id', 'id_name_depart'], [
           [NULL,'1 психиатрическое отделение'], 
           [NULL,'2 психиатрическое отделение'], 
           [NULL,'3 психиатрическое отделение']
        ]);
    }

 
    public function safeDown()
    {
        $this->delete('depart', ['id', 'id_name_depart'], [
            [NULL,'1 психиатрическое отделение'], 
            [NULL,'2 психиатрическое отделение'], 
            [NULL,'3 психиатрическое отделение']
         ]);
    }
    

}