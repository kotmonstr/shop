<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <div id="collapse4" class="body">
            <!--Begin Datatables-->
          
             
                 
                   

                            <h1><?= Html::encode($this->title) ?></h1>
                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                            <p>
                                <?= Html::a('Create Blog', ['create'], ['class' => 'btn btn-success']) ?>
                            </p>

                            <?=
                            GridView::widget([
                                'dataProvider' => $dataProvider,
                                //'filterModel' => $searchModel,
                                'columns' => [
                                  
                                    
                                    'title',
                                    //'image',
                                    'content:html',
                                    //'created_at',
                                    // 'updated_at',
                                    // 'author',
                                    ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]);
                            ?>

                   
               
            
        </div>
        </div>
    </div>
</div>

<style>
    td{
        width: 200px!important;
        max-width:200px!important;
        overflow: hidden;
    }
    </style>
