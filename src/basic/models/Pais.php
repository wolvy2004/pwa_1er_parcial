<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pais".
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $cod
 */
class Pais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50],
            [['cod'], 'string', 'max' => 4],
            [['nombre'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'cod' => 'Cod',
        ];
    }
}
