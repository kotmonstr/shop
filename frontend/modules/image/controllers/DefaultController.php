<?php

namespace app\modules\image\controllers;

use Yii;
use common\models\Image;
use common\models\ImageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class DefaultController extends Controller {

    public $layout = '/adminka';


    public function actionIndex() {

        $searchModel = new ImageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    public function actionUpload() {

       $model = new Image;

        return $this->render('upload',['model'=> $model]);
    }
    
    public function actionUploadSubmit() {
        //vd($_POST);
         $model = new Image();

        if (Yii::$app->request->isPost) {
        
     
            $model->file_image = UploadedFile::getInstance($model, 'file_image');
            //vd($model->file_image );
            $model->file_image->saveAs('upload/' . $model->file_image->baseName . '.' . $model->file_image->extension);
          
      
                Yii::$app->session->setFlash('success','Фоторгафии удачно сохранены');
            }else{
                 
            
            Yii::$app->session->setFlash('error','Фоторгафии не удачно сохранены');
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
        if (($model = Image::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
