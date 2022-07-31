<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'director')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actores')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'genero_id')->textInput() ?>

    <?= $form->field($model, 'calificacion_id')->textInput() ?>

    <?= $form->field($model, 'image')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'origen')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
