<?php


use yii\widgets\LinkPager;
use yii\helpers\StringHelper;
?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <center><h3> <?= 'Видео' ?></h3></center>
            <?php foreach ($model as $video): ?>
                <div class="col-xs-6 col-md-4 video-before-click" style="padding:5px;overflow: hidden">
                    <a class="video-before-click" href="javascript:void(0);" onclick="ChangeVideo('<?= $video->youtube_id ?>')">
                        <div class="video-before-click-link "><?= StringHelper::truncate($video->title, 48); ?></div>
                        <div class="<?= $video->youtube_id ?>" style="width:355px;overflow: hidden"><img src="http://img.youtube.com/vi/<?= $video->youtube_id; ?>/mqdefault.jpg" alt="" height="355"></div>
                    </a> 
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

<style>
    .video-before-click{
        opacity: 0.8;  
    }
    .video-before-click:hover{
        opacity: 1;
        //background-color: #666;
    }
    .video-before-click-link{
        opacity: 0.8;
        color:#fff;
    }
    .video-before-click-link:hover{
        opacity: 1;
        //background-color: #666;
    }
</style>


