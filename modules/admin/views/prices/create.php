<?php

/** @var yii\web\View $this */
/** @var app\models\Prices $model */

$this->title = 'Create Prices';
$this->params['breadcrumbs'][] = ['label' => 'Prices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prices-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
