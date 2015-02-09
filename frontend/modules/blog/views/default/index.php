<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\StringHelper;
use common\models\Comment;
Yii::$app->formatter->locale = 'ru-RU';
?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <div class="group">
<div id="center">
           
            <center><h3>Новости</h3></center>
 <?php foreach ($model as $blog): ?>           
           <?php
           $image = $blog->image;
           if($image == ''){$image = "/img-custom/default.jpg";}
           //vd($blog->updater->username );
           ?> 
        
            <div class="pos bg_preview_post">
                <div class="hdash"></div>
                <div class="preview_post">
                    <div class="img"><a href=""><img alt="" src="<?= $image ?>"></a></div>
                    <div class="txt">
                        <div class="title"><a href="<?= Url::to(['/blog/default/views', 'id' => $blog->id]); ?>"><?= $blog->title ?></a></div>
                        <div class="partition">
                            <a href="/world/">Международная политика</a>
                        </div>
                        <div class="text"><?= StringHelper::truncate($blog->content, 500); ?>
                        </div>
                        <div class="bottom">
                            <div class="fleft">
                                <strong><a  href="/user5/"><?= $blog->updater->username ?></a></strong>
                                <span style="margin-left:5px;"time="<?= $blog->created_at ?>" class="time update_local_time"><span class="glyphicon glyphicon-time bold" aria-hidden="true"></span><?= ' '.Yii::$app->formatter->asDate($blog->created_at, 'long').' '.Yii::$app->formatter->asTime($blog->created_at,'short') ?></span>
                            </div>
                            <div class="fright">
                                <span class="post_view"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span><?= $blog->view ?></span>
                                <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span><a class="post_comm" href=""><?= Comment::getMessagesQuantityByBlogId($blog->id); ?></a>
                            </div>                            
                        </div>
                    </div>
                </div><!--preview_post-->
            </div>
            
        <?php endforeach; ?>    
       
    </div>
    </div>
    </div>
    </div>

</section>






<div class="row"> 
    <center>
        <?=
        LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
    </center>
</div> 


<style>
    .mtitle {
        background: url("http://politrussia.com/bitrix/templates/v3.0/images/mtitle.gif") repeat-x scroll left center rgba(0, 0, 0, 0);
        margin-bottom: 15px;
        color: #666;
    font-family: "solomon";
    font-size: 14px;
    }
    .bg_preview_post {
        background: none repeat scroll 0 0 #f1f1e6;
        margin-bottom: 20px;
        padding: 10px;
    }
    .pos {
        position: relative;
    }
    .hdash {
        //background: url("http://politrussia.com/bitrix/templates/v3.0/images/hdash.gif") repeat-y scroll 0 0 rgba(0, 0, 0, 0);
        display: block;
        height: 100%;
        left: 100%;
        margin-left: 14px;
        position: absolute;
        top: 0;
        width: 1px;
    }
    .bg_preview_post .preview_post {
        margin-bottom: 0;
    }
    .preview_post {
        margin-bottom: 20px;
        overflow: hidden;
        position: relative;
    }
    .bg_preview_post .preview_post .img {
        width: 280px;
    }
    .preview_post .img {
        border: 1px solid #bbbbbb;
        float: left;
        width: 340px;
    }

    a, a:link, a:visited {
        color: #cc0000;
        text-decoration: none;
    }
    a, a:link, a:visited {
        color: #cc0000;
        text-decoration: none;
    }

    .bg_preview_post .preview_post .txt {
        margin-left: 310px;
    }
    .preview_post .txt {
        margin-left: 375px;
    }

    .preview_post .txt .title {
        border-bottom: 2px solid #e1e1e1;
        line-height: 30px;
        margin-bottom: 15px;
        padding-bottom: 10px;
        padding-top: 2px;
    }

    .preview_post .txt .partition {
        font-family: "solomon_semibold"!important;
        margin-bottom: 20px;
    }

    .preview_post .txt .text {
        color: #000!important;;
        font-family: "Open Sans",sans-serif!important;;
        font-size: 20px!important;;
        line-height: 28px!important;;
        margin-bottom: 25px;
        text-align: justify!important;;
    }

    .bg_preview_post .preview_post .bottom {
        bottom: 0;
        left: 310px;
        overflow: hidden;
        padding-left: 1px;
        position: absolute;
        width: 610px;
    }
    .preview_post .bottom {
        bottom: 0;
        left: 375px;
        overflow: hidden;
        position: absolute;
        width: 565px;
    }
    
.post_list {
    color: #666;
    font-family: "solomon";
    font-size: 14px;
    background-color: #E9E9E9;
}
#center {
    float: left;
    width: 1120px;
}
.clearfix:after, .group:after {
    clear: both;
    content: " ";
    display: block;
    font-size: 0;
    height: 0;
    line-height: 0;
    visibility: hidden;
}
.clearfix, .group {
}
.pos{
border-radius: 4px;
box-shadow: 5px 5px 10px #000;
}



    
</style>
