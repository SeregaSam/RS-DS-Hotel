<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class BookRoomForm extends Book {

	public $idCategory;
	public $internet;
	public $telephone;
	public $minibar;
	
	public static function tableName() {
    	return 'book_room' ;
    }

	public function attributeLabels() {
		return [
			'internet' => 'Интернет',
			'telephone' => 'Телефон',
			'minibar' => 'Минибар'
		];
	}

	 public function rules()
     {
        return [
            [['arrivalDate','departDate','statusCode'], 'required'],
            ['arrivalDate', 'date', 'format' => 'php:Y-m-d'],
            ['departDate', 'date', 'format' => 'php:Y-m-d'],
            [['statusCode'], 'string', 'max' => 32],
            [['idClient'], 'integer'],
            [['idCategory'], 'safe'],
            [['foodType'], 'integer'],
            [['groupSize'], 'integer'],
            [['departDate'], 'date', 'format' => 'php:Y-m-d'],     
        ];
    }

	public function findRoom() {
		$room = Room::find()->select(['room.id','idCategory','title','price','itsFree'])->join('LEFT JOIN','category','category.id=room.idCategory')->where(['itsFree' => '1', 'idCategory' => $this->idCategory])->limit(1)->asArray()->all();

		$this->idRoom = $room[0]['id'];
	}

	public function changeRoomStatus() {
		$room = Room::findOne($this->idRoom);
		$room->itsFree = 0;
		$room->save(false);
	}

	public function countCost() {
		$room = Room::find()->select(['room.id','idCategory','title','price','itsFree'])->join('LEFT JOIN','category','category.id=room.idCategory')->where(['itsFree' => '1', 'idCategory' => $this->idCategory])->limit(1)->asArray()->all();

		$period = date_diff(date_create($this->arrivalDate), date_create($this->departDate))->days;

		$this->cost = $room[0]['price'] * $period;

		if($this->minibar) {
			$this->cost = $this->cost + $period * 500;
		}

		if($this->internet) {
			$this->cost = $this->cost + $period * 125;
		}

		if($this->telephone) {
			$this->cost = $this->cost + $period * 150;	
		}

		if($this->foodType = '1') {
			$this->cost = $this->cost + $period * 100;
		}

		if($this->foodType = '2') {
			$this->cost = $this->cost + $period * 200;
		}

		if($this->foodType = '3') {
			$this->cost = $this->cost + $period * 300;
		}

		$this->countSale($period);
	}

	public function countSale($period) {
		if($period > 30) {
			$this->cost = $this->cost - 0.1*$this->cost;
		}
	}
}

?>