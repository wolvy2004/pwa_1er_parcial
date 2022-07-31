<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%genero}}`.
 */
class m220727_234601_create_genero_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%genero}}', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(50)->notNull()->unique(),
        ]);
        
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%genero}}');
    }
}
