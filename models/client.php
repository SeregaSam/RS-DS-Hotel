<?php
namespace app\models;

use yii\db\ActiveRecord;

class client extends  ActiveRecord
{
    public static function tableName() {// если отличается название таблицы
        return 'client_hotel' ;
    }
    public function getBook()
    {
        //return $this->hasOne(room::className(), ['id' => 'IdBookRoom']);
    }
    public function rules()
    {
        return [
            [['Name','Surname','Partonymic'], 'required'],   
            [['Name','Surname','Partonymic'], 'string', 'max' => 32],
            
            
        ];
    }
}