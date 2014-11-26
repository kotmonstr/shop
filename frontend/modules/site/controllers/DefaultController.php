<?php

namespace app\modules\site\controllers;

use yii\web\Controller;
use frontend\models\SignupForm;
use Yii;
use common\models\LoginForm;

;

class DefaultController extends Controller {

    public function actionIndex() {


        return $this->render('index');
    }

    public function actionError() {
        return $this->render('error');
    }

    public function actionLogin() {
         $this->layout = '/blog';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $model->username = Yii::$app->request->post('username');    
        $model->password = Yii::$app->request->post('password');
        
        if ( $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                        'model' => $model,
            ]);
        }
    }
      public function actionSignup() {
          if(Yii::$app->request->post()){
               $model = new SignupForm();
               $model->username = Yii::$app->request->post('username');
               $model->email = Yii::$app->request->post('email');
               $model->password = Yii::$app->request->post('password');
                if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    
                    return $this->goHome();
                }
            }
         
          }
           $this->layout = '/blog';
     

        return $this->render('signup', [
                    'model' => $model,
        ]);
    }
      public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
