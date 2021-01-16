<?php

namespace app\models;

use Yii;
use yii\base\Model;

class BookRoomForm extends Model {
	public $username;
	public $surname;
	public $roomCategoryId;
	public $nutrition;
	public $internet;
	public $telephone;
	public $minibar;

	public function attributeLabels() {
		return [
			'internet' => 'Интернет',
			'telephone' => 'Телефон',
			'minibar' => 'Минибар'
		];
	}
}

?>