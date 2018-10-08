<?php

use yii\db\Migration;

/**
 * Class m181008_163752_add_table
 */
class m181008_163752_add_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            'id'=> $this->primaryKey(),
            'username'=> $this->char(255)->notNull(),
            'name'=> $this->char(255)->notNull(),
            'password_hash'=> $this->char(255)->notNull(),
            'access_token'=> $this->char(255)->notNull(),
            'auth_key'=> $this->char(255)->notNull(),
            'creator_id'=> $this->integer()->notNull(),
            'updater_id'=> $this->integer()->notNull(),
            'created_at'=> $this->integer()->notNull(),
            'updated_at'=> $this->integer()->notNull(),
        ]);

        $this->createTable('task', [
            'id'=> $this->primaryKey(),
            'title'=> $this->char(255)->notNull(),
            'description'=> $this->text()->notNull(),
            'creator_id'=> $this->integer()->notNull(),
            'updater_id'=> $this->integer()->notNull(),
            'created_at'=> $this->integer()->notNull(),
            'updated_at'=> $this->integer()->notNull(),
        ]);

        $this->createTable('task_user',[
            'id'=> $this->primaryKey(),
            'task_id'=> $this->integer()->notNull(),
            'user_id'=> $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
        $this->dropTable('task');
        $this->dropTable('task_user');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m181008_163752_add_table cannot be reverted.\n";

        return false;
    }
    */
}
