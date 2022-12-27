<?php

/** @var yii\web\View $this */
/** @var app\models\Prices $model */

$this->title = 'Update Prices: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prices-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
