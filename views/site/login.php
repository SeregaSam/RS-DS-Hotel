<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

   

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

<main class="main_form-styles">
		<div class="main__inner">
			<div class="c-form-block main__form-block">
			<?php $form = ActiveForm::begin()?>
				<form class="c-form" method="POST">
					<div class="c-from__group">
						 <?= $form->field($model, 'username')->textInput(['autofocus' => true],['class' => 'c-form__input']) ?>
						
					</div>

					<div class="c-from__group">
						<?= $form->field($model, 'password')->passwordInput() ?>
						
					</div>

					<div class="c-from__group c-from__group_btn-block">
						<input type="submit" class="btn c-from__btn" name="submit" value="Войти">
					</div>	
				</form>
				 <?php ActiveForm::end(); ?>
			</div>	
		</div>
	</main>   
 	
