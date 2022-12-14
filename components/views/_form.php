<?php
/** @var app\models\FeedbackForm $model */

use yii\widgets\ActiveForm; ?>

<?php
$form = ActiveForm::begin(['action' => 'form/feedback']); ?>
<?= $form->field($model, 'name', ['options' => ['class' => 'input-consultation-form']])->input(
    'text',
    ['placeholder' => 'Имя']
) ?>
<?= $form->field($model, 'tel_number', ['options' => ['class' => 'input-consultation-form']])->input(
    'text',
    ['placeholder' => 'Номер телефона']
) ?>
<?= $form->field($model, 'email', ['options' => ['class' => 'input-consultation-form']])->input(
    'email',
    ['placeholder' => 'Почта']
) ?>
<?= $form->field($model, 'question', ['options' => ['class' => 'input-consultation-form']])->textarea(
    ['placeholder' => 'Подробно опишите суть вопроса']
) ?>
<?= $form->field($model, 'reCaptcha', ['options' => ['class' => 'input-consultation-form mb-3']])->widget(
    \himiklab\yii2\recaptcha\ReCaptcha2::class
) ?>
<?= \yii\helpers\Html::button(
    'Оставить заявку',
    ['class' => 'btn btn-request btn-request-primary-fill', 'type' => 'submit']
) ?>
<p class="mt-3 mb-0 agreement-text">Нажимая «Оставить заявку», я даю согласие на...</p>
<?php
ActiveForm::end() ?>
