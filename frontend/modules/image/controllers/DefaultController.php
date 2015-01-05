<?php

namespace app\modules\image\controllers;

use Yii;
use common\models\ImageSlider;
use common\models\ImageSliderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
//use yii\imagine\BaseImage;
use Imagine\Image\ManipulatorInterface;
use yii\imagine\Image;

class DefaultController extends Controller {

    public $layout = '/adminka';

    public function actionIndex() {

        $searchModel = new ImageSliderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUpload() {

        $model = new ImageSlider;
        return $this->render('upload', ['model' => $model]);
    }

    public function actionUploadSubmit() {
        $model = new ImageSlider;

        if (Yii::$app->request->isPost) {
            $model->file_image = UploadedFile::getInstance($model, 'file_image');
            $model->file_image->saveAs('uploads/' . $model->file_image->baseName . '.' . $model->file_image->extension);






            $full_name = $model->file_image->baseName . '.' . $model->file_image->extension;
            //vd($full_name);
            $_model = new \common\models\ImageSlider;
            $_model->name = $full_name;
            //$_model->validate();
            //vd($_model->getErrors());
            $_model->save();


//            Image::crop(Yii::getAlias('@frontend') . '/web/uploads/' . $full_name, 2048, 1200, [0, 0])
//                    ->save(Yii::getAlias('@frontend') . '/web/uploads2/' . $full_name, ['quality' => 80]);

     

            Image::thumbnail(Yii::getAlias('@frontend') . '/web/uploads/' . $full_name, 1200, 500)
                    ->save(Yii::getAlias(Yii::getAlias('@frontend') . '/web/thumbs/' . $full_name), ['quality' => 80]);

            Yii::$app->session->setFlash('success', 'Фоторгафии удачно сохранены');
        } else {


            Yii::$app->session->setFlash('error', 'Фоторгафии не удачно сохранены');
        }

        return $this->redirect('upload');
    }

    /**
     * Displays a single Image model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Image model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {


        $model = new Image();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $file = UploadedFile::getInstance($model, 'name');
            if ($fileModel = FileModel::saveAs($file, '@common/upload')) {
                
            }

            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                if ($model->saveUploadedFile() !== false) {
                    $model->save();
                    return $this->redirect();
                }
            } else {
                return $this->render('create', ['model' => $model]);
            }
        }
    }

    /**
     * Updates an existing Image model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Image model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Image model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Image the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = ImageSlider::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
