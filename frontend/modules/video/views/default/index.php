<?php
$this->registerJsFile('/js/youtube.js');



use yii\helpers\Url;
?>


<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <header class="dark">
                        <div class="icons">
                            <i class="fa fa-check"></i>
                        </div>
                        <h5>Youtube</h5>
                        <!-- .toolbar -->
                        <div class="toolbar">
                            <nav style="padding: 8px;">
                                <a href="javascript:;" class="btn btn-default btn-xs collapse-box">
                                    <i class="fa fa-minus"></i>
                                </a> 
                                <a href="javascript:;" class="btn btn-default btn-xs full-box">
                                    <i class="fa fa-expand"></i>
                                </a> 
                                <a href="javascript:;" class="btn btn-danger btn-xs close-box">
                                    <i class="fa fa-times"></i>
                                </a> 
                            </nav>
                        </div><!-- /.toolbar -->
                    </header>
                    <div id="collapse2" class="body">
                        <form class="form-horizontal" id="youtube-form" method="POST" action="<?= Url::to('/video/add') ?>">
                         
                            <div class="form-group">
                                <label class="control-label col-lg-4">Введите адресс Youtube ролика</label>
                                <div class=" col-lg-6">
                                    <input class="validate[required] form-control" type="text" name="youtube" id="youtube" onkeyup="sendYoutubeCode()"/>
                                </div>
                            </div>
                            
                               <div class="form-group info">
                              
                            </div>
                            

                            <div class="form-group">
                                <label class="control-label col-lg-4">Выберите категорию</label>
                                <div class="col-lg-6">
                                    <select name="categoria"  class="validate[required] form-control">
                                        <?php foreach($video_categoria as $video ){?>
                                        <option value="<?= $video->id ?>"><?= $video->name ?></option>
                                   
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                        
                            
                            
                         
                           
                            
                            
            <input type="hidden" class="csrf" name="<?= \Yii::$app->request->csrfParam ?>"
                   value="<?= \Yii::$app->request->getCsrfToken() ?>">
                            
                        </form>
                    </div>
                </div>
            </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
    </div>
</div>

<style>
    label{
       
        color: #000080;
    }
 
</style>
