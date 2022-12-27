<?php

/** @var yii\web\View $this */
/** @var app\models\ServicePriceCategories $model */

$this->title = 'Update Service Price Categories: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Service Price Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-price-categories-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
