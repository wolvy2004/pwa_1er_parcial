<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\GeneroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="genero-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Resetear', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
