<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ImageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Слайдер';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="content">
    <div class="outer">
        <div class="inner bg-light lter">
            <div id="collapse4" class="body">
                <!--Begin Datatables-->
                <div class="image-index">

                    <h1><?= Html::encode($this->title) ?></h1>
                    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                    <p>
                        <?= Html::a('Загрузить фотки', ['/image/default/upload'], ['class' => 'btn btn-success']) ?>
                    </p>
              

                    <?=
                    GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            'name',
                            [
                                'attribute' => 'name',
                                'format' => 'html',
                                'value' => function ($dataProvider) {
                                    return '<img src='.'/thumbs/' . $dataProvider->name . ' height="100px">';
                                },
                                'label' => 'Предпросмотр',
                            ],
                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]);
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>