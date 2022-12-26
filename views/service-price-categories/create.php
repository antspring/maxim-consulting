<?php

/** @var yii\web\View $this */
/** @var app\models\ServicePriceCategories $model */

$this->title = 'Create Service Price Categories';
$this->params['breadcrumbs'][] = ['label' => 'Service Price Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-price-categories-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
