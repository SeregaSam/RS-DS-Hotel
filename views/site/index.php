<?php  
use yii\helpers\Html;

$this->title = 'RS-DC Hotel';
?>
<main class="main">
		<div class="slider"></div>

		<div class="c-products-block c-products-block_background-light">
			<div class="l-container c-products-block__content">
				<div class="l-row">
					<div class="c-products-block__text-content">
						<h2 class="c-products-block__caption">Мы предлагаем лучшие номера для вашего отдыха</h2>
						<p class="c-products-block__text">Далеко-далеко, в нашем отеле вы найдете покой и отдых от повседневних проблем</p>
					</div>

					<div class="l-products-row">
						<?php foreach($categories as $category): ?>
							<div class="l-products-row__col">
								<div class="c-number-cart">
									<figure class="c-number-cart__img-wrapper">
										<?= Html::img('@web/img/'.Html::encode($category['imgAlias']).'.jpg', ['class' => 'c-number-cart__img'])?>	
									</figure>

									<div class="c-number-cart__content">
										<h3 class="c-number-cart__caption">
											<a href="" class="c-number-cart__caption-link">Номер <?=Html::encode($category['title'])?></a>
										</h3>

										<div class="c-number-cart__price-status">
											<span class="c-number-cart__price-value">&#8381;<?=Html::encode($category['price'])?> за ночь</span>
										</div>

										<p class="c-number-cart__description"><?=Html::encode($category['description'])?></p>

										<div class="c-number-cart__btn-wrapper">
											<?= Html::a('Забронировать', ['site/book-room', 'selectedCategoryId' => $category['id']], ['class' => 'btn']) ?>
										</div>
									</div>

								<p class="c-number-cart__footer">
									<span class="c-number-cart__specification">
										<strong class="c-number-cart__specification-value"><?=Html::encode($category['square'])?></strong> м2
									</span>
									<span class="c-number-cart__specification">
										<strong class="c-number-cart__specification-value"><?=Html::encode($category['beds'])?></strong> кровати
									</span>
									<span class="c-number-cart__specification">
										<strong class="c-number-cart__specification-value"><?=Html::encode($category['baths'])?></strong> ванны
									</span>
								</p>
								</div>
							</div>	
						<?php endforeach; ?>
					</div>	
				</div>
			</div>
		</div>
	</main>
