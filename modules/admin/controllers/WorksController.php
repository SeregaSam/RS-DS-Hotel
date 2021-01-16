<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\Room;
use app\modules\admin\models\BookSearch;
use Yii;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Book;
use yii\data\Pagination;

/**
 * Default controller for the `admin` module
 */
class WorksController extends Controller
{
     
    public function actionIndex()
    {
       return $this->actionRooms();
    }
    
    public function actionRooms()
    {
        $rooms = Room::find();

        $paginationRooms = new Pagination([
            'defaultPageSize' => '15',
            'totalCount' => $rooms->count(),
        ]);

        $rooms = Room::find()->select(['roomNumber','title','price', 'itsFree'])->joinWith('category')->offset( $paginationRooms->offset )->limit( $paginationRooms->limit )->asArray()->all();
 
        return $this->render('rooms', compact('rooms', 'paginationRooms'));
    }
    
    public function actionBooks()
    {
        
        $sql2 = 'SELECT book_room.IdBookRoom, client_hotel.Surname, client_hotel.Name, client_hotel.Partonymic, book_room.ArrivalDate, book_room.DepartDate, book_room.StatusCode, book_room.GroupSize From book_room LEFT JOIN client_hotel ON book_room.IdMainClient =  client_hotel.IdClient Order By book_room.IdBookRoom';
        $Hotbooks = Book::findBySql($sql2)->asArray()->all();
        return $this->render('books',compact('Hotbooks'));
    }
    public function actionBook()
    {
        $searchModel = new BookSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('booktable', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCreate()
    {
        $model = new Book();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdBookRoom]);
        }
        
        return $this->render('bookcreate', [
            'model' => $model,
        ]);
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        return $this->redirect(['index']);
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->IdBookRoom]);
        }
        
        return $this->render('bookupdate', [
            'model' => $model,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        }
        
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
