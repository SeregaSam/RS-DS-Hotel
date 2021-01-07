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

@inheritdoc}
     */
    public static function tableName()
    {
        return 'prod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Parent'], 'required'],
            [['Parent'], 'integer'],
            [['Title'], 'string', 'max' => 25],
            [['Alies'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Title' => 'Title',
            'Alies' => 'Alies',
            'Parent' => 'Parent',
        ];
    }
}
