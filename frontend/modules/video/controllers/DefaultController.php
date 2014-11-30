<?php

namespace app\modules\video\controllers;

use Yii;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use common\models\Video;


/**
 * DefaultController implements the CRUD actions for Image model.
 */
class DefaultController extends Controller {

    public $layout = '/blog';

    
    public function actionView() {
        $categoria_id = Yii::$app->request->get('categoria_id');
        //vd($categoria_id);
        $model_video = Video::find()->where(['categoria'=> $categoria_id])->all();
        //vd($model_video);
        
        return $this->render('view', [
                    'model' => $model_video,
        ]);
    }

    

}
