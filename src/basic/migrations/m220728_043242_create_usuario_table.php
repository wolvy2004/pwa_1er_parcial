<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%usuario}}`.
 */
class m220728_043242_create_usuario_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%usuario}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull()->unique(),
            'username' => $this->string(80)->unique(),
            'password' => $this->string(255)->notNull(),
            'accessToken' => $this->string(255),
            'authKey' => $this->string(255),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%usuario}}');
    }
}
