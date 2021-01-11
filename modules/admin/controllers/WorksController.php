<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\modules\admin\models\room;

/**
 * Default controller for the `admin` module
 */
class WorksController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public $layout = 'admin';
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionRooms()
    {
        
        $sql2 = 'SELECT room.IdRoom, room_category.Name,room_category.GuestNumber,room_category.Cost, room_category.Info From room, room_category WHERE room.IdCategory = room_category.IdCategory Order By room.IdRoom';
        $Hotrooms = room::findBySql($sql2)->asArray()->all();
        return $this->render('rooms',compact('Hotrooms'));
    }
    public function actionBooks()
    {
        
        $sql2 = 'SELECT book_room.IdBookRoom, client_hotel.Surname, client_hotel.Name, client_hotel.Partonymic, book_room.ArrivalDate, book_room.DepartDate, book_room.StatusCode, book_room.GroupSize From book_room LEFT JOIN client_hotel ON book_room.IdMainClient =  client_hotel.IdClient Order By book_room.IdBookRoom';
        $Hotbooks = room::findBySql($sql2)->asArray()->all();
        return $this->render('books',compact('Hotbooks'));
    }
}
