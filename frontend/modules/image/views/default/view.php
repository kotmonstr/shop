<?php

use yii\helpers\Html;
?>


<div class="sub-content">
    <div class="container">

        <div class="row" style="">
            <div class="" style="float:left;height:100px"> 
                <?php
                foreach ($model as $image) {
                    ?>

                    <?= Html::img('/uploads-new/' . $image->name, ['width' => '200px', 'height' => '100px', 'Alt' => 'image']); ?>

                <?php } ?>

            </div>
        </div>
    </div>
</div>
