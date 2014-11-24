<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>



<section id="content">
    <div class="sub-content">
        <div class="container">
            <center><h3>Статьи</h3></center>
            <div class="row">
                <div class="span12">
                    <h4 class="bot-0">kot</h4>
                </div>
            </div>


            <?php foreach ($model as $blog): ?>
                <div class="row"> 
                    <div class="thumbnails_4">  

                        <div class="span12">
                            <div class="thumbnail thumbnail_4">  
                                <figure><img src="<?= $blog->image ?>" class="img-radius" alt=""></figure>
                                <p class="lead p2"><a href="<?= Url::to(['/blog/default/view', 'id' => $blog->id]); ?>" class="lead"><?= $blog->title ?></a></p>
                                    <?= $blog->content ?>
                            </div>
                        </div>
                    </div>   
                </div>  
            <?php endforeach; ?>
  <div class="row"> 
      <center>
<?= LinkPager::widget([
    'pagination' => $pages,
]);
            ?>
          </center>
   </div> 
        </div>
    </div>
</section>

