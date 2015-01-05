<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\VideoCategoria */

$this->title = 'Update Video Categoria: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Video Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="video-categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
