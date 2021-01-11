<?php
namespace app\models;

use yii\db\ActiveRecord;

class book extends  ActiveRecord
{
       public static function tableName() {// если отличается название таблицы
            return 'book_room' ;
         }
         public function getClient()
         {
             return $this->hasOne(client::className(), ['IdClient' => 'IdMainClient']);
         }
         public function rules()
         {
             return [
                 [['ArrivalDate','DepartDate','StatusCode'], 'required'],
                 ['ArrivalDate', 'date', 'format' => 'php:Y-m-d'],
                 ['DepartDate', 'date', 'format' => 'php:Y-m-d'],
                 [['StatusCode'], 'string', 'max' => 32],
                 [['IdMainClient'], 'integer'],
                 [['Room'], 'integer'],
                 [['GroupSize'], 'integer'],
                 [['DepartDate'], 'date', 'format' => 'php:Y-m-d'],
                 
             ];
         }
         
         /**
          * {@inheritdoc}
          */
         public function attributeLabels()
         {
             return [
                 'IdBookRoom' => 'ID',
                 'ArrivalDate' => 'Прибывает',
                 'DepartDate' => 'Уезжает',
                 'StatusCode' => 'Статус',
                 'IdMainClient' => 'IdClient',
                 'Room' => 'Взрослых',// тип комнаты
                 'GroupSize' => 'Размер группы',// тип комнаты
                 'DateCreate' => 'Создан',
             ];
         }
}
