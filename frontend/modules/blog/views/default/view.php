<?php

use yii\helpers\Url;
?>



<section id="content">
    <div class="sub-content">
        <div class="container shet">
            <center><h3><?= $blog->title ?></h3></center>
            <div class="row">
                <center>
                    <div class="span12 shet">  
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
<style>
    p{
        //color:#ffffff!important;
        background-color: #fff!important;
        font-family: verdana;
    }
    .shet{
        padding:15px;
        background-color: #fff!important;  
    }
    #content{
        //box-shadow: inset 10px 10px 10px red;
       // box-shadow: inset 10px 10px 10px 10px #00193A;
    }
    @media (min-width: 1200px){

        .container, .navbar-static-top .container, .navbar-fixed-top .container, .navbar-fixed-bottom .container {
            width: 1150px;
             
        }
    }
    @media (min-width: 1200px){
        .span12 {
            width: 1150px;
            margin-left: 20px!important;
            padding: 15px;
           
        }
    }
    h3 {
        font-size: 28px;
        text-transform: uppercase;
        font-family: verdana;
        letter-spacing: -2px;
        color: #666;
    }

</style>