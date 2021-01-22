<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Забронировать';
?>

<main class="main_form-styles">
	<div class="main__inner">
		<div class="c-form-block main__form-block">
			<?php $form = ActiveForm::begin([
				'id' => 'book-form',
				'options'=>['class'=>'c-form'],
				'fieldConfig' => [
					'template' => '<div class="c-form__group">{input}{error}</div>',
				]
			]) ?>

			<h2 class="c-form__caption">Представьтесь</h2>

			<?= $form->field($client, 'name')->textInput(['placeholder' => 'Имя', 'class'=>'c-form__input']); ?>

			<?= $form->field($client, 'surname')->textInput(['placeholder' => 'Фамилия', 'class'=>'c-form__input']); ?>

			<?= $form->field($client, 'patronymic')->textInput(['placeholder' => 'Отчество', 'class'=>'c-form__input']); ?>

			<?= $form->field($client, 'email')->textInput(['email', 'placeholder' => 'email', 'class'=>'c-form__input']); ?>

			<h2 class="c-form__caption">Тип номера</h2>

			<?= $form->field($bookRoomForm,'idCategory')->dropDownList(['1' => 'одноместный', '2' => 'двухместный', '3' => 'трехместный', '4' => 'люкс'], ['class' => 'c-form__input']); ?>

			<h2 class="c-form__caption">Дата прибытия</h2>

			<?= $form->field($bookRoomForm,'arrivalDate')->input('date', ['class' => 'c-form__input']); ?>

			<h2>Дата отъезда</h2>

			<?= $form->field($bookRoomForm,'departDate')->input('date', ['class' => 'c-form__input']); ?>			

			<h2 class="c-form__caption">Питание</h2>

			<?= $form->field($bookRoomForm,'foodType')->dropDownList(['1' => 'завтрак', '2' => 'полупансион', '3' => 'полный пансион'], ['class' => 'c-form__input']); ?>

			<h2 class="c-form__caption">Дополнительные услуги</h2>

			<?=$form->field($bookRoomForm, 'internet')->checkbox();?>
			<?=$form->field($bookRoomForm, 'telephone')->checkbox();?>
			<?=$form->field($bookRoomForm, 'minibar')->checkbox();?>

			<div class="c-form__group c-form__group_btn-block">
				<?= Html::submitButton('Забронировать', ['class'=>'btn c-form__btn'])?>
			</div>

			<?php $form = ActiveForm::end()?>
		</div>	
	</div>
</main>