<?php

use common\models\ImageSlider;

$model = ImageSlider::getmodel();
?>    


<div class="slider">
    <div class="camera_wrap">
<?php foreach ($model as $image): ?>
            <!--  <div data-src="/img/slide4.jpg"></div> -->
            <div data-src="<?= $baseDir . '/thumbs/' . $image->name ?>"></div>


<?php endforeach ?>
    </div>
</div>
</header>