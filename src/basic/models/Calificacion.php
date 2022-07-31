<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calificacion".
 *
 * @property int $id
 * @property string $descripcion
 * @property string|null $cod_mostrar
 *
 * @property Movie[] $movies
 */
class Calificacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calificacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['descripcion'], 'string', 'max' => 50],
            [['cod_mostrar'], 'string', 'max' => 10],
            [['descripcion'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descripcion' => 'Descripcion',
            'cod_mostrar' => 'Cod Mostrar',
        ];
    }

    /**
     * Gets query for [[Movies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movie::className(), ['calificacion_id' => 'id']);
    }
}
