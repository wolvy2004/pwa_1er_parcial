<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\bootstrap4\ButtonDropdown;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header style="height:150px ;">
        <?php
        NavBar::begin([
            'brandLabel' => '<img src= "http://127.0.0.1:8000/logo_blanco100x100.png" style="margin-right:50px" class="img-responsive">' . Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top ',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Usuarios', 'url' => ['/usuario']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],



            ],
        ]);
        echo ButtonDropdown::widget([
            'options'=>['class'=>'btn btn-success '],
            'label' => 'Peliculas',
            'dropdown' => [
                'items' => [
                    ['label' => 'Generos', 'url' => '/genero'],
                    ['label' => 'Calificaciones', 'url' => '/calificacion'],
                    ['label' => 'Pais de origen', 'url' => '/pais'],
                    ['label' => 'Peliculas', 'url' => '/movie'],
                ],
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav',],
            'items' => [
                Yii::$app->user->isGuest ? ([
                    'label' => 'Login', 'url' => ['/site/login'],
                    'options' => ['class' => "btn btn-primary", 'style' => 'margin:20px'],
                ]
                ) : ('<span style="width:150px; color:#fff; margin:10px;"> Bienvenido/a: ' . Yii::$app->user->identity->nombre . '</span>' .
                    '<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
                    . Html::submitButton(
                        'Cerrar Sesion',
                        [
                            'class' => 'btn btn-primary',

                        ]
                    )
                    . Html::endForm()
                    . '</li>'

                )
            ],
        ]);
        NavBar::end();
        ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-left">&copy; Universidad Nacional del Comahue :: Tec. Univ. en Desarrollo Web <?= date('Y') ?></p>
            <p class="float-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>