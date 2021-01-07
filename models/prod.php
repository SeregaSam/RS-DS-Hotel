<?php
namespace app\models;

use yii\db\ActiveRecord;

class prod extends ActiveRecord 
{
    public static function prod() {
    return 'prod';
    }
    public function getTestTable() {
      return $this->hasOne(testtable::className(),['Id'=>'Parent']);
    }
}

