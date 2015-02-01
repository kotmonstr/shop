<?php

use common\models\ImageSlider;

$model = ImageSlider::find()->all();
?>   
<div class="slider">
    <div class="camera_wrap">
<?php foreach ($model as $image): ?>
     
            <div data-src="<?= '/upload/slider-thumbs/' . $image->name ?>"></div>


<?php endforeach ?>
    </div>
</div>
</header>