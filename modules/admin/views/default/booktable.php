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
                'label' => 'Отчество','attribute' => 'client.Patronymic',
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
                'filter' => ['1' => 'предварительная бронь', '2' => 'забронировал', '3' => 'клиент снял номер','4'=>'клиент в отеле','5'=>'завершен','6'=>'бронь отменена'],
                'value'=>function($data){
                if ($data->StatusCode==1) return 'предварительная бронь';
                if ($data->StatusCode==2) return 'забронировал';
                if ($data->StatusCode==3) return 'клиент снял номер';
                if ($data->StatusCode==4) return 'клиент в отеле';
                if ($data->StatusCode==5) return 'завершен';
                if ($data->StatusCode==6) return 'отменен';
                }
                
                
                ],
                [
                    'label' => 'Тип питания',
                    'attribute' =>'FoodType',
                    'filter' => ['1' => 'нет', '2' => 'завтрак', '3' => 'полупансион','4'=>'пансион'],
                    'value'=>function($data){
                    if ($data->FoodType==1) return 'нет';
                    if ($data->FoodType==2) return 'завтрак';
                    if ($data->FoodType==3) return 'полупансион';
                    if ($data->FoodType==4) return 'пансион';
                    }
                    
                    ],
                    [
                        'attribute' =>'GroupSize',
                        'filter' => ['1' => '1 человек', '2' => '2 человека', '3' => '3 человека','4'=>'4 человека'],
                        
                    ],
                 
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'headerOptions' => ['width' => '80'],
                'template' => '{view} {update} {delete}',
                
            ],
        ],
    ]); ?>


</div>