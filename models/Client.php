<?php
namespace app\models;

use yii\db\ActiveRecord;

class Client extends ActiveRecord
{
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