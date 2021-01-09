<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
namespace  app\models\LoginForm; 

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
 	
<main class="main_form-styles">
		<div class="main__inner">
			<div class="c-form-block main__form-block">
				<?php $form = ActiveForm::begin(['id' => 'login-form','errorCssClass'=>'c-form__validError','options'=>['class'=>'c-form']])?>
				
					<div class="c-from__group">
						<?=$form->field($model,'username')->textInput(['class'=>'c-form__input'])->input('username', ['placeholder' => "Ваше Имя", 'class'=>'c-form__input'])->label(false);?>						
					</div>
					
					
					<div class="c-from__group">
						<?= $form->field($model,'password')->passwordInput(['class'=>'c-form__input'])->input('password', ['placeholder' => "пароль", 'class'=>'c-form__input'])->label(false);?>
					</div>
					<div class="c-from__group">
						<?= $form->field($model,'rememberMe')->checkbox()->label('Запомнить меня',['class'=>'c-form__label']);?>
					</div>
					
					<div class="c-from__group c-from__group_btn-block">
						<?= Html::submitButton('Войти',['class'=>'btn c-from__btn'])?>
					</div>	
				
				<?php $form = ActiveForm::end()?>
			</div>	
		</div>
	</main>