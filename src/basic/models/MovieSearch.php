<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Movie;
use app\models\Genero;

/**
 * MovieSearch represents the model behind the search form of `app\models\Movie`.
 */
class MovieSearch extends Movie
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'genero_id', 'calificacion_id', 'origen', 'duracion'], 'integer'],
            [['titulo', 'director', 'actores', 'image'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
     public function buscarGenero($data, $id){
        $buscarGenero = Genero::findOne($data->id);
        $genero=$buscarGenero->descripcion;
        return $genero;

     }
     public function buscarCalificacion($data, $id){
        $buscarGenero = Calificacion::findOne($data->id);
        $genero=$buscarGenero->cod_mostrar;
        return $genero;

     }
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Movie::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'genero_id' => $this->genero_id,
            'calificacion_id' => $this->calificacion_id,
            'origen' => $this->origen,
            'duracion' => $this->duracion,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'director', $this->director])
            ->andFilterWhere(['like', 'actores', $this->actores])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
