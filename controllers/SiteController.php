<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

use app\models\Blog;
use app\models\BlogForm;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

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

    
    public function actionIndex()//Главная страница с блогами
    {
        $blogs = Blog::find()->all();//Запрос на все блоги
        return $this->render('index',[ 'blogs'=>$blogs]);
    }
    public function actionCreat()//Страница создания блогов
    {
        $model= new BlogForm;
        if($_POST!=null){//Проверка на POST
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                $model->name=$_POST['BlogForm']['name'];//Запись в модель данных из формы
                $model->text=$_POST['BlogForm']['text'];
                $model->save();
                return $this->refresh();
            } else {
                // При ошибке
                return $this->render('error');
            }
        }
        return $this->render('creat', [
            'model' => $model,
        ]);

    }

  
}
