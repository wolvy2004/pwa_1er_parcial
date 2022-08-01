<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Genero;
use app\models\Calificacion;


/* @var $this yii\web\View */
/* @var $model app\models\Movie */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movie-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'director')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'actores')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'genero')->dropDownList(ArrayHelper::map(Genero::find()->all(), 'id', 'descripcion'),['prompt'=>'Seleccion un Genero']) ?>

    <?= $form->field($model, 'calificacion')->dropDownList(ArrayHelper::map(Calificacion::find()->all(), 'id', 'descripcion'),['prompt'=>'Seleccion Calificacion']) ?>

    <?= $form->field($model, 'image')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'origen')->textInput() ?>

    <?= $form->field($model, 'duracion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
