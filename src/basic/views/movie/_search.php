<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MovieSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'titulo') ?>

    <?= $form->field($model, 'director') ?>

    <?= $form->field($model, 'actores') ?>

    <?= $form->field($model, 'genero') ?>

    <?php // echo $form->field($model, 'calificacion_id') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'origen') ?>

    <?php // echo $form->field($model, 'duracion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Resetear', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
