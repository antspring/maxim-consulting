<?php

use app\models\Prices;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;

/** @var yii\web\View $this */
/** @var app\models\PricesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Prices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prices-index">

    <p>
        <?= Html::a('Create Prices', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php
    // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'category_price_id',
                'filter' => yii\bootstrap5\Html::activeDropDownList(
                    $searchModel,
                    'category_price_id',
                    $searchModel::getCategoriesPrice(),
                    ['class' => 'form-control', 'prompt' => 'Категория цены на услугу']
                )
            ],
            [
                'attribute' => 'category',
                'filter' => yii\bootstrap5\Html::activeDropDownList(
                    $searchModel,
                    'category',
                    $searchModel::getCategories(),
                    ['class' => 'form-control', 'prompt' => 'Категория']
                )
            ],
            'title',
            'description',
            //'price',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Prices $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>
