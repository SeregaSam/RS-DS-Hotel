<?php

use yii\helpers\Html;
use yii\grid\GridView;



$this->title = 'BookRoom';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-books">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'tableOptions' => [
            'class' => 'table table-striped table-bordered'
        ],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            [
                'label' => 'Фамилия',
                'attribute' => 'client.Surname',
            ],
            [
                'label' => 'Имя','attribute' => 'client.Name',
            ],
            [
                'label' => 'Отчество','attribute' => 'client.Partonymic',
            ],
            
            [
                'attribute' => 'ArrivalDate',
                'format' => ['date', 'php:d-m-Y']
            ],
            [
                'attribute' => 'DepartDate',
                'format' => ['date', 'php:d-m-Y']
            ],
                   
            [
                'label' => 'Код',
                'attribute' => 'StatusCode',
                'filter' => ['предварительная бронь' => 'предварительная бронь', 'забронировал' => 'забронировал', 'клиент снял номер' => 'клиент снял номер','клиент в отеле'=>'клиент в отеле','номер сдан'=>'завершен','отменен'=>'бронь отменена'],
               
                
                
            ],
            'Room',
            'GroupSize',

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'headerOptions' => ['width' => '80'],
                'template' => '{view} {update} {delete}',
                
            ],
        ],
    ]); ?>


</div>