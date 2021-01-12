<?php
namespace app\models;

use yii\db\ActiveRecord;

class Room extends  ActiveRecord
{
    public static function tableName() {// если отличается название таблицы
        return 'client_hotel' ;
    }
}