<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movie}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%genero}}`
 * - `{{%calificacion}}`
 */
class m220728_004434_create_movie_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movie}}', [
            'id' => $this->primaryKey(),
            'titulo' => $this->string(50)->notNull()->unique(),
            'director' => $this->string(100),
            'actores' => $this->text(255),
            'genero_id' => $this->integer(),
            'calificacion_id' => $this->integer(),
            'image' => $this->text(255),
            'origen' => $this->integer(4),
            'duracion' => $this->integer(4),
        ]);

        // creates index for column `genero`
        $this->createIndex(
            '{{%idx-movie-genero}}',
            '{{%movie}}',
            'genero_id'
        );

        // add foreign key for table `{{%genero}}`
        $this->addForeignKey(
            '{{%fk-movie-genero}}',
            '{{%movie}}',
            'genero_id',
            '{{%genero}}',
            'id',
            'CASCADE'
        );

        // creates index for column `notNull()`
        $this->createIndex(
            '{{%idx-movie-calificacion}}',
            '{{%movie}}',
            'calificacion_id'
        );

        // add foreign key for table `{{%calificacion}}`
        $this->addForeignKey(
            '{{%fk-movie-calificacion}}',
            '{{%movie}}',
            'calificacion_id',
            '{{%calificacion}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%genero}}`
        $this->dropForeignKey(
            '{{%fk-movie-genero}}',
            '{{%movie}}'
        );

        // drops index for column `genero`
        $this->dropIndex(
            '{{%idx-movie-genero}}',
            '{{%movie}}'
        );

        // drops foreign key for table `{{%calificacion}}`
        $this->dropForeignKey(
            '{{%fk-movie-calificacion}}',
            '{{%movie}}'
        );

        // drops index for column `notNull()`
        $this->dropIndex(
            '{{%idx-movie-calificacion}}',
            '{{%movie}}'
        );

        $this->dropTable('{{%movie}}');
    }
}
