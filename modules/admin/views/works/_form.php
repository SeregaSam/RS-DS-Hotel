<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\prod */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prod-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ArrivalDate')->textInput() ?>

    <?= $form->field($model, 'DepartDate')->textInput() ?>
    
    <?= $form->field($model, 'StatusCode')->textInput(['maxlength' => true]) ?>
     
    <?= $form->field($model, 'IdMainClient')->textInput() ?>

    <?= $form->field($model, 'Room')->textInput() ?>
    
    <?= $form->field($model, 'GroupSize')->textInput() ?>
    
    <?= $form->field($model, 'DateCreate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
