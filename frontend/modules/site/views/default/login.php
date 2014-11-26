<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="content">
<div class="sub-content">
  <div class="container">
    <div class="row">
      <div class="span4">
     
          	
		</div>  
        <div class="span6">
        	<h4>Вход</h4>
            <div class="contact-form">
                <form id="contact-form" action="<?= Url::to('/site/login'); ?>" method="POST">
              
          
                  <div class="success">Contact form submitted!<strong><br>We will be in touch soon.</strong> </div>
                  <fieldset>
                      <label class="name">
                       <input type="text" placeholder="Имя" name="username">						
                       <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>						
                  </label>	
               
                  <label class="password">						
                       <input type="password" placeholder="Пароль" name="password">						
                       <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>						
                  </label>		
            
                </fieldset>
                  <div class="">
                     
                      <input  class="btn btn_ btn-small_" type="submit" tile="sdc">
                      
                  </div>
                  
                   <input type="hidden" name="<?= \Yii::$app->request->csrfParam ?>"
                   value="<?= \Yii::$app->request->getCsrfToken() ?>">
         
                   </form>
           </div>
		</div>  
    </div>           
  </div>
</div>
</section>


