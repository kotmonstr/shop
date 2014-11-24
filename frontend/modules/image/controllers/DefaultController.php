<?php

namespace app\modules\image\controllers;

use yii\web\Controller;

use Yii;

use yii\data\Pagination;

class DefaultController extends Controller {

    public $layout = '/blog';

    public function actionIndex() {
       

        return $this->render('index');
    }

   

}
