<?php
namespace app\models;

use yii\db\ActiveRecord;
use app\models\Client;

class Book extends ActiveRecord
{
       public static function tableName() {
            return 'book_room';
         }

         public function getClient()
         {
             return $this->hasOne(Client::className(), ['idClient' => 'idMainClient']);
         }

         public function rules()
         {
             return [
                 [['arrivalDate','departDate','statusCode'], 'required'],
                 ['arrivalDate', 'date', 'format' => 'php:Y-m-d'],
                 ['departDate', 'date', 'format' => 'php:Y-m-d'],
                 [['statusCode'], 'string', 'max' => 32],
                 [['idClient'], 'integer'],
                 [['foodType'], 'integer'],
                 [['groupSize'], 'integer'],
                 [['departDate'], 'date', 'format' => 'php:Y-m-d'],
                 
             ];
         }         
}
