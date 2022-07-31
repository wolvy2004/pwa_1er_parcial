<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%calificacion}}`.
 */
class m220728_003855_create_calificacion_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%calificacion}}', [
            'id' => $this->primaryKey(),
            'descripcion' => $this->string(50)->notNull()->unique(),
            'cod_mostrar' => $this->string(10),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%calificacion}}');
    }
}
