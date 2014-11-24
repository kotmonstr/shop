<?php

use common\models\Image;

$model = Image::getmodel();
?>    


<div class="slider">
    <div class="camera_wrap">
<?php foreach ($model as $image): ?>
            <!--  <div data-src="/img/slide4.jpg"></div> -->
            <div data-src="<?= $baseDir . '/uploads/' . $image->name ?>"></div>


<?php endforeach ?>
    </div>
</div>
</header>