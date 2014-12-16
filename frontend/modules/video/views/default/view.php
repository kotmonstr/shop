<?php
$this->registerJsFile('/js/custom/flash.js');

use yii\widgets\LinkPager;
use yii\helpers\StringHelper;
?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="row">
                <center><h3> <?= 'Видео' ?></h3></center>
                <?php foreach ($model as $video): ?>
                    <div class="col-xs-6 col-md-4 video-before-click" style="padding:5px;">
                        <a class="video-before-click" href="javascript:void(0);" onclick="ChangeVideo('<?= $video->youtube_id ?>')">
                            <div class="video-before-click-link "><?= StringHelper::truncate($video->title, 48); ?></div>
                            <div class="<?= $video->youtube_id ?> col-md-12" onmouseover="hideImage('<?= $video->youtube_id; ?>')"  onmouseleave="showImage('<?= $video->youtube_id; ?>')" style="overflow: hidden">
                               <img class="a-<?= $video->youtube_id; ?>" style="position:relative;float:left;" src="http://img.youtube.com/vi/<?= $video->youtube_id; ?>/mqdefault.jpg" alt="" height="355"> 
                               <img class="b-<?= $video->youtube_id; ?>" src="/img/youtube.png" alt="" style="position:absolute;top: 30px;right: 142px;padding: 14px;width: 121px;display:none">
                            </div>
                        </a> 
                    </div>
                <?php endforeach; ?>
                <center>
                    <?php
// display pagination
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                    ?>
                </center>
            </div>
        </div>
    </div>
</section>


<style>
    .video-before-click{
        opacity: 0.8;  
    }
    .video-before-click:hover{
        opacity: 1;
   
    }
    .video-before-click-link{
        opacity: 0.8;
        color:#fff;
    }
    .video-before-click-link:hover{
        opacity: 1;


    }

</style>


