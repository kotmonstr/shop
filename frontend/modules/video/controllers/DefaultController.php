<?php

namespace app\modules\video\controllers;

use Yii;
use yii\web\Controller;
use Madcoda\Youtube as MadcodaYoutube;
use common\models\Video;

/**
 * DefaultController implements the CRUD actions for Image model.
 */
class DefaultController extends Controller {

    public $layout = '/blog';

    public function actionView() {
        $categoria_id = Yii::$app->request->get('categoria_id');
        //vd($categoria_id);
        $model_video = Video::find()->where(['categoria' => $categoria_id])->all();
        //vd($model_video);

        return $this->render('view', [
                    'model' => $model_video,
        ]);
    }

    public function actionTv() {
        
        return $this->render('tv');
    }

    public function actionIndex() {
           $this->layout = '/adminka';
      
      
        return $this->render('index');
    }

    public function actionYoutube() {

        $youtube = new Youtube(array('key' => 'AIzaSyBU4vsvP20CYdFuibdgTMOaZ10vt7JxV5c'));
        $video = $youtube->getVideoInfo('Ougqp7BKvE');
        vd($video);
    }
    public function actionSendYoutubeCode() {
        
          $code = trim(Yii::$app->request->post('code'));
          $youtube = new Youtube(array('key' => 'AIzaSyBU4vsvP20CYdFuibdgTMOaZ10vt7JxV5c'));
          $video = $youtube->getVideoInfo('code');
          vd($video);
            
    }

}
