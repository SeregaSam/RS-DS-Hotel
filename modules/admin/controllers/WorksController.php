<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\room;

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
        
        $sql2 = 'SELECT room.IdRoom, room_category.Name,room_category.GuestNumber,room_category.Cost, room_category.Info From room RIGHT JOIN room_category ON room.IdCategory =  room_category.IdCategory Order By room.IdRoom';
        $Hotrooms = room::findBySql($sql2)->asArray()->all();
        return $this->render('rooms',compact('Hotrooms'));
    }
}
