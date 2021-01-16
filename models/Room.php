<?php
namespace app\models;

use yii\db\ActiveRecord;

class Room extends ActiveRecord
{
	public function getCategory() {
		return $this->hasOne(Category::className(), ['id' => 'idCategory']);
	}
}