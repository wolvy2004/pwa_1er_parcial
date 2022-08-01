<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Calificacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="calificacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cod_mostrar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
