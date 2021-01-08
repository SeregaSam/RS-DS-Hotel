<?php
use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $phptos = $this->getAssetManager()->getBundle('app\assets\AppAsset'); ?>
<?php $this->beginPage()?>
<! doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">     
    <title><?= Html::encode($this->title) ?></title>
  
	<title>Главная</title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <header class="c-header">
		<div class="l-container">
			<div class="l-row">
				<div class="c-header__inner">
					<div class="c-logo c-header__logo">
						<a href="index.html" class="c-logo__link">
							<?= Html::img($phptos->baseUrl . "/img/logo-mobile.svg", ['class' => 'c-logo__img'])?>
							
						</a>
					</div>
					<div class="c-header__nav-wrapper">
						<nav class="c-header__navigation c-navigation">
							<ul class="c-navigation__list">
								<li class="c-navigation__list-item">
									<?= Html::a('О отеле',['hotel/about'],['class' => 'c-navigation-link']) ?>
								</li>
								<li class="c-navigation__list-item">				
									<?= Html::a('Галерея',['hotel/galary'],['class' => 'c-navigation-link']) ?>
								</li>	
								<li class="c-navigation__list-item">
									
									<?= Html::a('Забронировать',['hotel/bookroom'],['class' => 'c-navigation-link']) ?>
								</li>
								<li class="c-navigation__list-item c-navigation__list-item_enter-btn-container">
									
									<?= Html::a('Войти в систему',['hotel/logon'],['class' => 'btn c-navigation__enter-btn']) ?>
								</li>
							</ul>
						</nav>
						 <?php  if( isset($this->blocks['block1'])):?>
            			<?php echo $this->blocks['block1']?>
            			<?php endif;?>
            			
					</div>
				</div>	
			</div>
		</div>
	</header>
   <?= $content ?>
   <footer class="footer1">
		<div class="l-container">
			<div class="l-row">
				<div class="footer__content">
					<div class="footer__content-col">
						<h3 class="footer__col-caption">О RS·DC PROJECT</h3>
						<ul class="footer__list">
							<li class="footer__list-item">
								<?= Html::a('О нашем отеле',['hotel/about'],['class' => 'footer__list-link']) ?>
							</li>
							<li class="footer__list-item">								
								<?= Html::a('Номера',['hotel/rooms'],['class' => 'footer__list-link']) ?>
							</li>
							<li class="footer__list-item">
								<?= Html::a('Развлечения',['hotel/entertainment'],['class' => 'footer__list-link']) ?>								
							</li>
							<li class="footer__list-item">
								<?= Html::a('Галерея',['hotel/galary'],['class' => 'footer__list-link']) ?>								
							</li>
						</ul>
					</div>

					<div class="footer__content-col">
						<h3 class="footer__col-caption">Ваш отдых</h3>
						<ul class="footer__list">
							<li class="footer__list-item">								
								<?= Html::a('Регистрация',['hotel/registration'],['class' => 'footer__list-link']) ?>
							</li>
							<li class="footer__list-item">
								<?= Html::a('Бронирование',['hotel/bookroom'],['class' => 'footer__list-link']) ?>								
							</li>
							<li class="footer__list-item">
								<?= Html::a('Наши сервисы',['hotel/service'],['class' => 'footer__list-link']) ?>
							</li>
						</ul>
					</div>

					<div class="footer__content-col">
						<h3 class="footer__col-caption">Следите за нами</h3>
						<ul class="footer__list footer__list_social">
							<li class="footer__list-item">
								<a href="https://vk.com/chebols" class="footer__list-link footer__list-link_social"><i class="fab fa-twitter"></i></a>
							</li>
							<li class="footer__list-item">
								<a href="" class="footer__list-link footer__list-link_social"><i class="fab fa-facebook-f"></i></a>
							</li>
							<li class="footer__list-item">
								<a href="" class="footer__list-link footer__list-link_social"><i class="fab fa-vk"></i></a>
							</li>
							<li class="footer__list-item">
								<a href="" class="footer__list-link footer__list-link_social"><i class="fab fa-instagram"></i></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="footer__copyright-container">
					<div class="footer__copyright">
						<p class="footer__copyright-text">
							2021 © Все права защищены <br>RS·DC 41 GROUP  
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
     <?php $this->endBody() ?>
</body>
</html>
<<<<<<< HEAD
<?php $this->endPage() ?>
=======
>>>>>>> maxonV0.1
