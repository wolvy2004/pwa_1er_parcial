<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "genero".
 *
 * @property int $id
 * @property string $descripcion
 *
 * @property Movie[] $movies
 */
class Genero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['descripcion'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * Gets query for [[Movies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movie::className(), ['genero_id' => 'id']);
    }
}
