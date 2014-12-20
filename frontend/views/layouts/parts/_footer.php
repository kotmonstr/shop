<?php
use yii\helpers\Url;
?>

<footer>
   <div class="container">
    <div class="row">
      <div class="span4 float2">
        <form id="newsletter" method="post" >
            <label>Newsletter</label>
            <div class="clearfix">
                <input type="text" onFocus="if(this.value =='Enter e-mail here' ) this.value=''" onBlur="if(this.value=='') this.value='Enter e-mail here'" value="Enter e-mail here" >
                <a href="#" onClick="document.getElementById('newsletter').submit()" class="btn btn_">subscribe</a>
            </div>
        </form>
    </div>
    <div class="span8 float">
      	<ul class="footer-menu">
            <li><a href="<?= Url::to('/site/index')?>" class="current">Главная</a>|</li>
            <li><a href="<?= Url::to('/video/index')?>">Видео</a>|</li>
            <li><a href="<?= Url::to('/video/tv')?>">Тв</a>|</li>
            <li><a href="<?= Url::to('/image/index')?>">Фотографии</a>|</li>
            <li><a href="<?= Url::to('/blog/index')?>">Статьи</a>|</li>
            <li><a href="<?= Url::to('/admin/index')?>">Админка</a></li>
        </ul>
      	Shop  &copy;  <?= date("Y",time()); ?>  |   <a href="index-6.html">Privacy Policy</a> <!-- {%FOOTER_LINK} -->
      </div>
    </div>
   </div>
</footer>