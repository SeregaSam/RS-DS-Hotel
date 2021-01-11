<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/*namespace  app\models\LoginForm;*/ 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Войти';
?>
 	
<main class="main_form-styles">
		<div class="main__inner">
			<div class="c-form-block main__form-block">
				<?php $form = ActiveForm::begin([
					'id' => 'login-form',
					'options'=>['class'=>'c-form'],
					'fieldConfig' => [
						'template' => '<div class="c-form__group">{input}</div>',
					]
				])?>
					
				<?=$form->field($model,'username')->textInput(['placeholder' => 'Имя', 'class'=>'c-form__input']);?>						
						
				<?= $form->field($model,'password')->passwordInput(['placeholder' => 'Пароль', 'class'=>'c-form__input']);?>

				<?= $form->field($model,'rememberMe')->checkbox()->label('Запомнить меня',['class'=>'c-form__label']);?>
					
				<div class="c-form__group c-form__group_btn-block">
					<?= Html::submitButton('Войти', ['class'=>'btn c-form__btn'])?>
				</div>	
				
				<?php $form = ActiveForm::end()?>
				
			</div>	
		</div>
	</main>