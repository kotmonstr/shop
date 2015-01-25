<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <center><h3>Новости</h3></center>
            <?php foreach ($model as $blog): ?>
                <div class="row"> 
                    <div class="thumbnails_4">  

                        <div class="span12">
                            <p class="lead p2"><a href="<?= Url::to(['/blog/default/view', 'id' => $blog->id]); ?>" class="lead"><?= $blog->title ?></a></p>
                            <div class="thumbnail thumbnail_4">  
                                <figure><img src="<?= $blog->image ?>" class="img-radius" alt=""></figure>
                            </div>
                            <?= $blog->content ?>
                        </div>
                    </div>   
                </div>  
            <?php endforeach; ?>
            <div class="row"> 
                <center>
                    <?=
                    LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </center>
            </div> 
        </div>
    </div>
</section>
<style>
    body{
        //color:#fff!important;
        //font-size: 14px;
    }
    </style>
