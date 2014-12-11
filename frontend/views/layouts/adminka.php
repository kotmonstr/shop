<?php

use yii\helpers\Html;
use frontend\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php echo $this->render('parts_adminka/_pre_header') ?>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <?php echo $this->render('parts_adminka/_header') ?>
        <?php echo $this->render('parts_adminka/_sidebar') ?>

       <?php
foreach(Yii::$app->session->getAllFlashes() as $key => $message) {
    echo '<div class="alert alert-' . $key . '">' . $message . '</div>';
} ?>
        <?= $content ?>

        <?php echo $this->render('parts_adminka/_footer') ?>
        <?php $this->endBody() ?>
    </body>  
</html>
<?php $this->endPage() ?>
