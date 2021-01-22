<?php

namespace app\modules\admin\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use app\models\Room;
use app\models\Client;
use app\models\Book;
use app\models\BookRoomForm;
use app\modules\admin\models\BookSearch;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
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
        
        $rooms = Room::find()->select(['roomNumber','title','price','itsFree'])->join('LEFT JOIN','category','category.id=room.idCategory')->offset( $paginationRooms->offset )->limit( $paginationRooms->limit )->orderBy('room.id ASC')->asArray()->all();
        
        return $this->render('rooms', compact('rooms', 'paginationRooms'));
    }

    public function actionClients()
    {
        $clients = Client::find();

        $paginationClients = new Pagination([
            'defaultPageSize' => '15',
            'totalCount' => $clients->count(),
        ]);

        $clients = Client::find()->offset( $paginationClients->offset )->limit( $paginationClients->limit )->asArray()->all();

        return $this->render('clients', compact('clients', 'paginationClients'));
    }

    public function actionClientHistory($id=null) {
        $books = Book::find()->where(['idClient' => $id])->asArray()->all();

        return $this->render('client-history', compact('books'));
    }

    public function actionBooks()
    {
        
        $sql2 = 'SELECT book_room.idBookRoom, client.surname, client.name, client.patronymic, book_room.arrivalDate, book_room.departDate, book_room.statusCode, book_room.cost, room.roomNumber, book_room.groupSize From book_room LEFT JOIN client ON book_room.idClient =  client.id LEFT JOIN room ON book_room.idRoom = room.id Order By book_room.idBookRoom';
        $books = Book::findBySql($sql2)->asArray()->all();
        $client = new Client();
        $bookRoomForm = new BookRoomForm();
        $bookRoomForm->idClient = 3;
        $bookRoomForm->statusCode = 'processing';

        if($client->load(Yii::$app->request->post()) && $bookRoomForm->load(Yii::$app->request->post())) {
            $bookRoomForm->findRoom();
            $bookRoomForm->changeRoomStatus();
            $bookRoomForm->countCost();
            $bookRoomForm->save(false);
            $client->save(false);
        }

        return $this->render('books',compact('books', 'client', 'bookRoomForm'));
    }
    
    public function actionBooktable()
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

    public function actionDiscardBook($id = null) 
    {
        $book = Book::findOne($id);
        $room = Room::findOne($book->idRoom);
        $room->itsFree = 1;
        $book->statusCode = 'discard';
        $book->save(false);
        $room->save(false); 
        return $this->redirect(['books']);
    }

    public function actionAcceptBook ($id = null)
    {
        $book = Book::findOne($id);
        $book->statusCode = 'accepted';
        $book->save(false);
        return $this->redirect(['books']);
    }

    protected function findModel($id)
    {
        if (($model = Book::findOne($id)) !== null) {
            return $model;
        }
        
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
