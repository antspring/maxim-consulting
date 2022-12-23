<?php
/** @var yii\web\View $this */

use app\components\ConsultationFeedbackFormWidget;

$this->title = 'Контакты | Maxim Консалтинг';
?>

<section class="contacts position-relative">
    <div class="main-heading main-container d-flex justify-content-between">
        <div class="heading-container">
            <h1 class="heading header-l-700 w-100 mb-5 mb-lg-0">Оставьте заявку <br> на консультацию</h1>
            <?= ConsultationFeedbackFormWidget::widget() ?>
        </div>
        <img class="contacts-image" src="<?= Yii::getAlias('@web/images/1D9A2765.png') ?>" alt="">
        <img class="round-main position-absolute bottom-0 end-0" src="<?= Yii::getAlias('@web/images/Round.png') ?>"
             alt="">
    </div>
</section>
