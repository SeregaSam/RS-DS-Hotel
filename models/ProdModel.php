<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prod".
 *
 * @property int $Id
 * @property string|null $Title
 * @property string|null $Alies
 * @property int $Parent
 */
class ProdModel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
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
