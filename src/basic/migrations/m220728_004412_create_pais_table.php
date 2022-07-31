<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%pais}}`.
 */
class m220728_004412_create_pais_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pais}}', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(50)->notNull()->unique(),
            'cod' => $this->string(4),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%pais}}');
    }
}
