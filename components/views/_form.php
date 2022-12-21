<?php
/** @var app\models\FeedbackForm $model */

use yii\widgets\ActiveForm; ?>

<?php
$form = ActiveForm::begin(['action' => '/form/feedback']); ?>
<?= $form->field($model, 'name', ['options' => ['class' => 'input-consultation-form body-m-400']])->input(
    'text',
    ['placeholder' => 'Имя']
) ?>
<?= $form->field($model, 'tel_number', ['options' => ['class' => 'input-consultation-form body-m-400']])->input(
    'text',
    ['placeholder' => 'Номер телефона']
) ?>
<?= $form->field($model, 'email', ['options' => ['class' => 'input-consultation-form body-m-400']])->input(
    'email',
    ['placeholder' => 'Почта']
) ?>
<?= $form->field($model, 'question', ['options' => ['class' => 'input-consultation-form body-m-400']])->textarea(
    ['placeholder' => 'Подробно опишите суть вопроса']
) ?>
<?= $form->field($model, 'reCaptcha', ['options' => ['class' => 'input-consultation-form mb-3 body-m-400']])->widget(
    \himiklab\yii2\recaptcha\ReCaptcha2::class
) ?>
<?= \yii\helpers\Html::button(
    'Оставить заявку',
    ['class' => 'btn btn-request btn-request-primary btn-request-primary-fill body-m-400', 'type' => 'submit']
) ?>
<p class="mt-3 mb-0 agreement-text caption-400">Нажимая «Оставить заявку», я даю согласие на...</p>
<?php
ActiveForm::end() ?>
