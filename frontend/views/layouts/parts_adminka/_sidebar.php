<?php
use yii\helpers\Url;
?>

<div id="left">
                <div class="media user-media bg-dark dker">
                    <div class="user-media-toggleHover">
                        <span class="fa fa-user"></span> 
                    </div>
                    <div class="user-wrapper bg-dark">
                        <a class="user-link" href="">
                            <img class="media-object img-thumbnail user-img" alt="User Picture" src="/matis/img/user.gif">
                            <span class="label label-danger user-label">16</span> 
                        </a> 
                        <div class="media-body">
                            <h5 class="media-heading"><?= Yii::$app->user->identity->username ?></h5>
                            <ul class="list-unstyled user-info">
                                <li> <a href=""><?= Yii::$app->user->identity->username ?></a>  </li>
                                <li>Last Access :
                                    <br>
                                    <small>
                                        <i class="fa fa-calendar"></i>&nbsp;16 Mar 16:32</small> 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- #menu -->
                <ul id="menu" class="dker">
                    <li class="nav-header">Menu</li>
                    <li class="nav-divider"></li>
                 
                   <li class="">
                        <a href="<?= Url::to('/blog/show') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Cтатьи</span> 
                        </a> 
                    </li>
                 
                    <li class="">
                        <a href="<?= Url::to('/image/index') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Слайдер</span> 
                        </a> 
                    </li>
                    <li class="">
                        <a href="<?= Url::to('/video/index') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Youtube</span> 
                        </a> 
                    </li>
       
                    <li class="">
                        <a href="<?= Url::to('/video/preview') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp; Видео</span> 
                        </a> 
                    </li>
                    <li class="">
                        <a href="<?= Url::to('/video_categoria/index') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Категории видео</span> 
                        </a> 
                    </li>
                    <li class="">
                        <a href="<?= Url::to('/author/index') ?>">
                            <i class="fa"></i><span class="link-title">&nbsp;Авторы</span> 
                        </a> 
                    </li>
       
                    
          
                    
          
                </ul><!-- /#menu -->
            </div><!-- /#left -->