<?php

use yii\db\Migration;

/**
 * Class m210115_065918_addUserAdmin
 */
class m210115_065918_addUserAdmin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $time = time();
        $password_hash = Yii::$app->getSecurity()->generatePasswordHash('admin');
        $auth_key = Yii::$app->security->generateRandomString();
       
        $this->insert('user', [
        'username' => 'admin', 
        'name'=> 'name',
        'auth_key' => $auth_key,
        'access_token' => '1', 
        'password_hash' => $password_hash,
        'creator_id' => 'admin',
        'updater_id' => 'admin',
        'created_at' => $time,
        'updated_at' => $time
        ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210115_065918_addUserAdmin cannot be reverted.\n";

        return false;
    }
    */
}
