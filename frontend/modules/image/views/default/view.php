<?php

use yii\helpers\Html;
?>
<div class="sub-content">
    <div class="container">
        <div class="row" style="">
            <?php
            foreach ($model as $image) {
                ?>
                <div class="" style="float:left;height:100px">              
                <?= Html::img('/upload/multy-thumbs/' . $image->name, ['width' => '300px', 'height' => '200px', 'Alt' => 'image']); ?>
                </div>
<?php } ?>
        </div>
    </div>
</div>
