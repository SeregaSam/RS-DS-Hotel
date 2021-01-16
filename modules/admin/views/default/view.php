<?php

use yii\helpers\Html;
use yii\widgets\DetailView;



$this->title = $model->IdBookRoom;
$this->params['breadcrumbs'][] = ['label' => 'Prods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="prod-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdBookRoom], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdBookRoom], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdBookRoom',
            'ArrivalDate',
            'DepartDate',
            'IdMainClient',
            'Room',
            'GroupSize',
        ],
    ]) ?>

</div>