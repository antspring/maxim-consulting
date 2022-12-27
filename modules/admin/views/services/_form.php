<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Services $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="services-form">

    <?php
    $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'icon')->widget(\vova07\imperavi\Widget::class) ?>

    <?= $form->field($model, 'subheading')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->widget(\vova07\imperavi\Widget::class) ?>

    <?= $form->field($model, 'category')->dropDownList([
        $model->categories
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php
    ActiveForm::end(); ?>

</div>
