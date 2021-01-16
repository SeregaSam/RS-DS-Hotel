<?php

use kartik\daterange\DateRangePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;


$this->title = 'Создать бронь';
$this->params['breadcrumbs'][] = ['label' => 'Prods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prod-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model,'ArrivalDate')->textInput()?>

    <?= $form->field($model, 'DepartDate')->textInput() ?>
    
    <?= $form->field($model, 'StatusCode')->textInput(['maxlength' => true]) ?>
     
    <?= $form->field($model, 'IdMainClient')->textInput() ?>

    <?= $form->field($model, 'Room')->textInput() ?>
    
    <?= $form->field($model, 'GroupSize')->textInput() ?>
    
	<?php $model['DateCreate'] = date("Y-m-d")?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
