<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;

use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\BookRoomForm;
use app\models\Category;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\ComplaintForm;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $categories = Category::find()->asArray()->all();

        return $this->render('index', compact('categories'));
    }

    public function actionBookRoom($id=null) 
    {  
        $bookRoomForm = new BookRoomForm;
        
        is_null($id) ? $bookRoomForm->roomCategoryId = 1 : $bookRoomForm->roomCategoryId = $id;
        
        return $this->render('book-room', ['bookRoomForm' => $bookRoomForm]);
    } 

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
//         if (!Yii::$app->user->isGuest) {
//             return $this->render('index');
//         }

        $model = new LoginForm();
//         if ($model->load(Yii::$app->request->post()) && $model->login()) {
//             return $this->goBack();
//         }

      $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
    
    public function actionSay($message = 'Привет')
    {
        return $this->render('say', ['message' => $message]);
    }
    
    public function actionEntry()
    {
        $model = new EntryForm();
        
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены
            
            // делаем что-то полезное с $model ...
            
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('entry', ['model' => $model]);
        }
    }
     
    public function actionComplaint() {
        $model = new ComplaintForm();
        return $this->render('complaint',['model' => $model]);
    }
}
