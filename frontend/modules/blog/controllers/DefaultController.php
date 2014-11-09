<?php

namespace app\modules\blog\controllers;

use yii\web\Controller;
use common\models\Blog;
use Yii;

class DefaultController extends Controller {
public $layout = '/blog';
    public function actionIndex() {
        //$this->layout = '/blog';


        // Вывести список статей

        $model = Blog::find()->all();
        //vd($model);
        return $this->render('index', ['model' => $model]);
    }

    public function actionView() {
        //$this->layout = '/blog';
        $id= Yii::$app->request->get('id');
        //vd($id);
        $blog = Blog::find()->where(['id'=> $id])->one();
        //vd($blog->title);
        return $this->render('view',['blog' => $blog]);
    }

}
