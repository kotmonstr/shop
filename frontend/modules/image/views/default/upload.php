<?php

// with UI

use dosamigos\fileupload\FileUploadUI;
?>
<?= FileUploadUI::widget([
    'model' => new \common\models\Image,
    'attribute' => 'file_image',
    'url' => ['/image/upload-submit'],
    'gallery' => false,
    'fieldOptions' => [
            'accept' => 'image/*'
    ],
    'clientOptions' => [
            'maxFileSize' => 2000000
    ],
    // ... 
    'clientEvents' => [
            'fileuploaddone' => 'function(e, data) {
                                    console.log(e);
                                    console.log(data);
                                }',
            'fileuploadfail' => 'function(e, data) {
                                    console.log(e);
                                    console.log(data);
                                }',
    ],
]);
?>