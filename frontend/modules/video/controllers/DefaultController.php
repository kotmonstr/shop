<?php

namespace app\modules\video\controllers;

use Yii;
use yii\web\Controller;
use Madcoda\Youtube as MadcodaYoutube;
use common\models\Video;
use yii\base\Response;
use common\models\VideoCategoria;
use yii\data\Pagination;
use common\models\Author;

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
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 12]);
        $model_video = $model->offset($pages->offset)
                ->limit($pages->limit)
                ->orderBy('created_at Desc')
                ->all();



        return $this->render('view', [
                    'model' => $model_video,
                    'pages' => $pages,
        ]);
    }

    public function actionTv24() {

        return $this->render('tv');
    }
    public function actionTv1() {

        return $this->render('tv');
    }

    public function actionIndex() {
        $pageName = 'Главная';
        $this->layout = '/adminka';
        $video_categoria = VideoCategoria::find()->all();
        $authors = Author::find()->all();

        return $this->render('index', ['video_categoria' => $video_categoria, 'pageName' => $pageName, 'authors' => $authors]);
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
        $descr = $video->snippet->description;
        $imageSrc = $video->snippet->thumbnails->medium->url;
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
        //Поиск дубля
        $duble = Video::find()->where(['youtube_id' => $data[id]])->one();
        if (!empty($duble)) {
            Yii::$app->session->setFlash('error', ",Ролик уже сущестивует!");
            return $this->redirect('/video/index');
        }
        //vd($data);
        $_model = new Video;
        $_model->youtube_id = $data[id];
        $_model->title = $data[title];
        $_model->descr = $data[descr];
        $_model->categoria = $data[categoria];
        $_model->author_id = $data[author_id];

        //$_model->validate();
        //vd($_model->getErrors());

        if ($_model->save()) {
            Yii::$app->session->setFlash('success', "Data saved!");
        } else {
            Yii::$app->session->setFlash('error', "Error!");
        }
        return $this->redirect('/video/index');
    }

    public function actionShowAuthor($id) {
       
      
        //vd($categoria_id);
        $model = Video::find()->where(['author_id' => $id]);
        //vd($model_video);
        $countQuery = clone $model;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'defaultPageSize' => 12]);
        $model_video = $model->offset($pages->offset)
                ->limit($pages->limit)
                ->orderBy('created_at Desc')
                ->all();



        return $this->render('view', [
                    'model' => $model_video,
                    'pages' => $pages,
        ]);
    }

}
