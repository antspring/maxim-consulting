<?php
/** @var app\models\ConsultationFeedbackForm $model */

use yii\widgets\ActiveForm; ?>

<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name', ['options' => ['class' => 'input-consultation-form']]) ?>
<?= $form->field($model, 'tel_number') ?>
<?= $form->field($model, 'city') ?>
<?= $form->field($model, 'question') ?>
<?= \yii\helpers\Html::button('Оставить заявку', ['class' => 'btn']) ?>
<?php ActiveForm::end() ?>
