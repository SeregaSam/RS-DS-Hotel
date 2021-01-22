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
            [['name','surname','patronymic','email'], 'required'],   
            [['name','surname','patronymic'], 'string', 'max' => 32],  
        ];
    }

    public function attributeLabels() {
        return [
            'name' => 'имя',
            'surname' => 'фамилия',
            'patronymic' => 'отчество'
        ];
    }

    public function findLastId() {
        return Client::find()->max('id');
    }
}