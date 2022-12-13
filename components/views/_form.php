<?php
/** @var app\models\FeedbackForm $model */

use yii\widgets\ActiveForm; ?>

<?php
$form = ActiveForm::begin(['action' => 'form/feedback']); ?>
<?= $form->field($model, 'name', ['options' => ['class' => 'input-consultation-form']]) ?>
<?= $form->field($model, 'tel_number') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'question') ?>
<?= \yii\helpers\Html::button('Оставить заявку', ['class' => 'btn', 'type' => 'submit']) ?>
<?php
ActiveForm::end() ?>
