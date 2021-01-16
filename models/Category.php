<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord 
{
	public function getRooms() {
		return $this->hasMany(Room::className(), ['idCategory' => 'id']);
	}
}
?>