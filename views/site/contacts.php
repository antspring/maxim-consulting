<?php
/** @var yii\web\View $this */

use app\components\ConsultationFeedbackFormWidget;

$this->title = 'Контакты | Maxim Консалтинг';
?>

<section class="contacts">
    <div class="main-heading main-container d-flex justify-content-between position-relative">
        <div class="heading-container">
            <h1 class="heading header-xl-700 w-100 mb-5 mb-lg-0">Оставьте заявку <br> на консультацию</h1>
            <?= ConsultationFeedbackFormWidget::widget() ?>
        </div>
        <img class="contacts-image" src="<?= Yii::getAlias('@web/images/1D9A2765.png') ?>" alt="">
        <!--        <img class="round-main position-absolute top-0 end-0" src="--><?php
        //= Yii::getAlias('@web/images/Round.png') ?><!--"-->
        <!--             alt="">-->
    </div>
</section>
