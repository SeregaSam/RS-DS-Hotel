<?php
namespace app\modules\admin\models;

use yii\db\ActiveRecord;

class book extends  ActiveRecord
{
       public static function tableName() {// если отличается название таблицы
            return 'book_room' ;
         }
         public function getClient()
         {
             return $this->hasOne(room::className(), ['id' => 'IdClient']);
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
                 'ArrivalDate' => 'Arrival',
                 'DepartDate' => 'Depart',
                 'StatusCode' => 'Status',
                 'IdMainClient' => 'IdClient',
                 'Room' => 'Взрослых',// тип комнаты
                 'GroupSize' => 'Размер группы',// тип комнаты
                 'DateCreate' => 'Создан',
             ];
         }
}
