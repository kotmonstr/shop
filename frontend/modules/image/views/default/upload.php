<?php

//$this->registerJsFile('/js/custom/uploader.js');

// with UI

use dosamigos\fileupload\FileUploadUI;
?>
<?= FileUploadUI::widget([
    'model' => new \common\models\Image,
    'attribute' => 'file_image',
    'url' => ['/image/upload-submit'],
    'gallery' => true,
    'fieldOptions' => [
            'accept' => 'image/*'
    ],
    'clientOptions' => [
            'maxFileSize' => 99000000
    ],
   
    // ... 
   
]);
?>

<div id="progress">
    <div class="bar" style="width: 0%;"></div>
</div>

<style>
    
    .bar {
    height: 18px;
    background: green;
}
    </style>