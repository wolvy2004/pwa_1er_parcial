<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "movie".
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $director
 * @property string|null $actores
 * @property int|null $genero_id
 * @property int|null $calificacion_id
 * @property string|null $image
 * @property int|null $origen
 * @property int|null $duracion
 *
 * @property Calificacion $calificacion
 * @property Genero $genero
 */
class Movie extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['actores', 'image'], 'string'],
            [['genero_id', 'calificacion_id', 'origen', 'duracion'], 'integer'],
            [['titulo'], 'string', 'max' => 50],
            [['director'], 'string', 'max' => 100],
            [['titulo'], 'unique'],
            [['calificacion_id'], 'exist', 'skipOnError' => true, 'targetClass' => Calificacion::className(), 'targetAttribute' => ['calificacion_id' => 'id']],
            [['genero_id'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::className(), 'targetAttribute' => ['genero_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'director' => 'Director',
            'actores' => 'Actores',
            'genero_id' => 'Genero ID',
            'calificacion_id' => 'Calificacion ID',
            'image' => 'Image',
            'origen' => 'Origen',
            'duracion' => 'Duracion',
        ];
    }

    /**
     * Gets query for [[Calificacion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalificacion()
    {
        return $this->hasOne(Calificacion::className(), ['id' => 'calificacion_id']);
    }

    /**
     * Gets query for [[Genero]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGenero()
    {
        return $this->hasOne(Genero::className(), ['id' => 'genero_id']);
    }
}
