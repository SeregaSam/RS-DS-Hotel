<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use app\assets\AdminAsset;

AdminAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <?= Html::a('RS-DC Hotel', ['default/'], ['class' => 'navbar-brand col-md-3 col-lg-2 me-0 px-3']) ?>
        
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Выйти</a>
            </li>
        </ul>
    </header>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <?= Html::a('<i class="fa fa-home" aria-hidden="true"></i> Номера',['default/rooms'],['class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="fa fa-file" aria-hidden="true"></i> Брони',['default/books'],['class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item">
                            <?= Html::a('<i class="fa fa-user" aria-hidden="true"></i> Клиенты',['default/books'],['class' => 'nav-link']) ?>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ml-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                    <h2><?= Html::encode($this->title) ?></h2>
                </div>

                 <?= $content ?> 
            </main>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>