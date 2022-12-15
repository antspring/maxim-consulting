<?php
/** @var yii\web\View $this */

use app\components\ConsultationFeedbackFormWidget;

$this->title = 'Контакты | Maxim Консалтинг';
?>

<section class="contacts">
    <div class="main-heading d-flex justify-content-between">
        <div class="heading-container">
            <h1 class="bold-item heading">Оставьте заявку на консультацию</h1>
            <?= ConsultationFeedbackFormWidget::widget() ?>
        </div>
        <img src="<?= Yii::getAlias('@web/images/1D9A2765.png') ?>" alt="">
        <img class="round-main position-absolute top-0 end-0" src="<?= Yii::getAlias('@web/images/Round.png') ?>"
             alt="">
    </div>
</section>
