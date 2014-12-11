<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
?>



<section id="content">
    <div class="sub-content">
        <div class="container">
            <center><h3> <?= 'Видео' ?></h3></center>
         
                <?php foreach ($model as $video): ?>
                    <div class="col-xs-6 col-md-4">
                     
                             <iframe width="340" height="325" src="//www.youtube.com/embed/<?= $video->youtube_id; ?>" frameborder="0" allowfullscreen></iframe>
                       
                    </div>



                
                <?php endforeach; ?>
        

        </div>
    </div>
</section>
<?php
 // display pagination
  echo LinkPager::widget([
      'pagination' => $pages,
  ]);
?>
