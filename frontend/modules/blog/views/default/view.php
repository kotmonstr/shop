<?php

use yii\helpers\Url;
?>



<section id="content">
    <div class="sub-content">
        <div class="container">
            <center><h3>Новость: <?= $blog->title ?></h3></center>
            <div class="row">
                <center>
                <div class="span12">  
                    <img src="<?= $blog->image ?>" class="img-radius" alt="">
                </div>
                    </center>
                <div class="span12">

                    <?= $blog->content ?>
                </div>
            </div>

        </div>
    </div>
</section>
