<?php

namespace app\modules\video\controllers;

use Yii;
use yii\web\Controller;
use Madcoda\Youtube as MadcodaYoutube;
use common\models\Video;
use yii\base\Response;

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
        $video = $youtube->getVideoInfo('ez5M__82h1k');
        vd($video);
    }

    public function actionSendYoutubeCode() {
    
        $url = trim(Yii::$app->request->post('code'));

        function getYouTubeIdFromURL($url) {
            $url_string = parse_url($url, PHP_URL_QUERY);
            parse_str($url_string, $args);
            return isset($args['v']) ? $args['v'] : false;
        }

        $videoId = getYouTubeIdFromURL($url);
 
        $youtube = new Youtube(array('key' => 'AIzaSyBU4vsvP20CYdFuibdgTMOaZ10vt7JxV5c'));
        $video = $youtube->getVideoInfo($videoId);
        $title = $video->snippet->title;
        //vd($video->snippet->title);
        //vd($video->snippet->medium->url);
        //vd($video);
        $imageSrc = $video->snippet->thumbnails->medium->url;
        //vd($imageSrc);
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return $this->renderAjax('info', [ 'imageSrc' => $imageSrc,
                                           'title' => $title
            ]);
    }

}
