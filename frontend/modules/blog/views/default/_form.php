<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Blog */
/* @var $form yii\widgets\ActiveForm */
?>

<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>
         
 <?php

echo yii\imperavi\Widget::widget([
    // You can either use it for model attribute
    'model' => $model,
    'attribute' => 'content',

    // or just for input field
    //'name' => 'my_input_name',

    // Some options, see http://imperavi.com/redactor/docs/
    'options' => [
        'toolbar' => true,
       //'css' => 'wym.css',
    ],
]);
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
<script>
    
    
    </script>
