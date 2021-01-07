<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title)?> ADMIN</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'АМ', 'url' => ['/site/index']],
            ['label' => 'Articles', 'url' => ['/post/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
	<?= $content ?>
    
</div>

 <footer class="footer">
        <div class="row">
          
          <div class="footer__content-col">
            <h5>Особенности</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-secondary" href="#">Прикольная штука</a></li>
              <li><a class="link-secondary" href="#">Случайная особенность</a></li>
              <li><a class="link-secondary" href="#">Особенность команды</a></li>
              <li><a class="link-secondary" href="#">Материал для разработчиков</a></li>
            </ul>
          </div>
          <div class="footer__content-col">
            <h5>Ресурсы</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-secondary" href="#">Ресурс</a></li>
              <li><a class="link-secondary" href="#">Название ресурса</a></li>
              <li><a class="link-secondary" href="#">Другой ресурс</a></li>
              <li><a class="link-secondary" href="#">Заключительный ресурс</a></li>
            </ul>
          </div>
          <div class="footer__content-col">
            <h5>О нас</h5>
            <ul class="list-unstyled text-small">
              <li><a class="link-secondary" href="#">Команда</a></li>
              <li><a class="link-secondary" href="#">Местоположение</a></li>
              <li><a class="link-secondary" href="#">Конфиденциальность</a></li>
              <li><a class="link-secondary" href="#">Сроки</a></li>
            </ul>
          </div>
        </div>
      </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>