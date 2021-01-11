<?php

use yii\helpers\Html;

/* @var $this yii\web\View */


$this->title = 'Update Prod: ' . $model->IdBookRoom;
$this->params['breadcrumbs'][] = ['label' => 'Бронирование', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdBookRoom, 'url' => ['view', 'id' => $model->IdBookRoom]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prod-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
