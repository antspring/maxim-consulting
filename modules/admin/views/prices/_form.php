<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Prices $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="prices-form">

    <?php
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_price_id')->dropDownList([
        $model->categoriesPrice
    ]) ?>

    <?= $form->field($model, 'category')->dropDownList([
        $model->categories
    ]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php
    ActiveForm::end(); ?>

</div>
