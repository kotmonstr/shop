<?php

namespace app\modules\video\controllers;

use Yii;
use yii\web\Controller;
use Madcoda\Youtube as MadcodaYoutube;
use common\models\Video;
use yii\base\Response;
use common\models\VideoCategoria;
use yii\data\Pagination;

/**
 * DefaultController implements the CRUD actions for Image model.
 */
class DefaultController extends Controller {

    public $layout = '/blog';

    public function actionView() {
        $categoria_id = Yii::$app->request->get('categoria_id');
        //vd($categoria_id);
        $model = Video::find()->where(['categoria' => $categoria_id]);
        //vd($model_video);
        $countQuery = clone $model;
        $pages = new Pagination(['totalCount' => $countQuery->count(),'defaultPageSize' => 6]);
        $model_video = $model->offset($pages->offset)
                ->limit($pages->limit)
                ->all();



        return $this->render('view', [
                    'model' => $model_video,
                    'pages' => $pages,
        ]);
    }

    public function actionTv() {

        return $this->render('tv');
    }

    public function actionIndex() {
        $this->layout = '/adminka';
        $video_categoria = VideoCategoria::find()->all();

        return $this->render('index', ['video_categoria' => $video_categoria]);
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
        //$title = $video->snippet->description;
        $descr = $video->snippet->description;
        //vd($video->snippet->title);
        //vd($video->snippet->medium->url);
        //vd($video);
        $imageSrc = $video->snippet->thumbnails->medium->url;
        $preview = $video->player->embedHtml;
        //vd($preview);
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;




        return $this->renderAjax('info', [ 'imageSrc' => $imageSrc,
                    'title' => $title,
                    'descr' => $descr,
                    'preview' => $preview,
                    'id' => $video->id,
        ]);
    }

    public function actionAdd() {

        $data = Yii::$app->request->post();
        //vd($data);
        $_model = new Video;
        $_model->youtube_id = $data[id];
        $_model->title = $data[title];
        $_model->descr = $data[descr];
        $_model->categoria = $data[categoria];

        //$_model->validate();
        //vd($_model->getErrors());

        if ($_model->save()) {
            Yii::$app->session->setFlash('success', "Data saved!");
        } else {
            Yii::$app->session->setFlash('error', "Error!");
        }
        return $this->redirect('/video/index');
    }

}
