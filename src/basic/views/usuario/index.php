<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1 class="d-flex justify-content-between"><?= Html::encode($this->title) ?> 
        <?= Html::a('Crear Usuario', ['create'], ['class' => 'btn btn-success rigth']) ?>
        </h1>

   

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'nombre',
            'email',
            //'password',
            //'accessToken',
            //'authKey',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
