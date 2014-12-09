<?php if (isset($imageSrc) && $imageSrc != ''): ?>
    <div class="form-actions no-margin-bottom">
        <center>
            <span class="my-info"><?= $title ?></span>
            <img src="<?= $imageSrc ?>" alt="" width="400px">
        </center>
    </div>
<?php endif; ?>
<style>
    label{
       
        color: #000080;
    }
    .my-info{
         font-size: 20px;
        color: #000080;
    }
</style>