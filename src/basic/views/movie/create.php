<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */

$this->title = 'agregar Pelicula';
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="movie-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
