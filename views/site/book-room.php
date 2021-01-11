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
					'template' => '<div class="c-form__group">{input}</div>',
				]
			]) ?>

			<h2 class="c-form__caption">Представьтесь</h2>

			<?=$form->field($model,'username')->textInput(['placeholder' => 'Имя', 'class'=>'c-form__input']);?>

			<?=$form->field($model,'surname')->textInput(['placeholder' => 'Фамилия', 'class'=>'c-form__input']);?>
			<?php $form = ActiveForm::end()?>
		</div>	
	</div>
</main>