<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\Genero;
use app\models\Calificacion;
use phpDocumentor\Reflection\Types\Array_;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MovieSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Movies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Movie', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'director',
            'actores:ntext',
            
            [
                'attribute' => 'genero_id',
                'value' => [$searchModel, 'buscarGenero'],
                'filter' => html::activeDropDownList($searchModel, 'genero_id', ArrayHelper::map(Genero::find()->all(), 'id', 'descripcion'), ['prompt' => 'Seleccione un Genero']),
            ],
            [
                'attribute' => 'calificacion_id',
                'value' => [$searchModel, 'buscarCalificacion'],
                'filter' => html::activeDropDownList($searchModel, 'calificacion_id', ArrayHelper::map(Calificacion::find()->all(), 'id', 'descripcion'), ['prompt' => 'Seleccione una calificacion']),
            ],
            
            //'image:ntext',
            //'origen',
            'duracion',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>