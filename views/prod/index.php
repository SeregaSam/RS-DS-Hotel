<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProdSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prod-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Prod', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Id',
            'Title',
            'Alies',
            'Parent',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
