<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\helpers\StringHelper;
?>
<section id="content">
    <div class="sub-content">
        <div class="container">
            <center><h3>Новости</h3></center>
            <?php foreach ($model as $blog): ?>
                <div class="row"> 
                    <div class="thumbnails_4 ">  

                        <div class="span12 blog-post-content">
                            <p class="lead p2 header-blog"><a href="<?= Url::to(['/blog/default/view', 'id' => $blog->id]); ?>" class="lead"><?= $blog->title ?></a></p>
                            <div class="thumbnail thumbnail_4">  
                                <img src="<?= $blog->image ?>"  alt=""  width="350px">
                            </div>
                            <?= StringHelper::truncate($blog->content, 600); ?>
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
    .blog-post-content{
        background-color: #3A3A3B;
        /* border: 1px solid red; */
        border-radius: 10px;
        margin-bottom: 10px;
        //color: #fff;
        font-size: 12px;
        font-family: verdana;
        box-shadow: 5px 5px 25px #000;
        padding: 15px;
    }
    .header-blog a{
        font-size: 20px;
        font-weight: bold;
        //color: #fff!important;
    }
    .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
        z-index: 2;
        color: #fff;
        cursor: default;
        background-color: #3A3535;
      
    }
    .pagination > li > a, .pagination > li > span {
        position: relative;
        float: left;
        padding: 6px 12px;
        margin-left: -1px;
        line-height: 1.42857143;
        color: #337ab7;
        text-decoration: none;
        background-color: #919191;
       
    }
    .pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus {
        color: #777;
        cursor: not-allowed;
        background-color: #919191;
      
    }
        </style>
