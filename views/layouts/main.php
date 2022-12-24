<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\components\ConsultationFeedbackFormWidget;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php
    $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php
$this->beginBody() ?>

<header id="header" class="header fixed-top">
    <div class="w-100 d-flex justify-content-center header-container">
        <div class="w-100 h-100 d-flex align-items-center justify-content-between main-container">
            <div class="d-flex align-items-center justify-content-between nav-logo">
                <a href="<?= Url::toRoute('/site/index') ?>">
                    <img class="logo" src="<?= Yii::getAlias('@web/images/Logo_maxim.png') ?>" alt="">
                </a>
                <div class="nav-items">
                    <ul class="d-flex m-0 p-0 nav-items-list d-none d-lg-flex">
                        <li class="paragraph-main body-m-400">
                            <a class="link" href="<?= Url::toRoute('/site/services') ?>">Услуги</a>
                        </li>
                        <li class="paragraph-main body-m-400">
                            <a class="link" href="<?= Url::toRoute('/site/price') ?>">Цены</a>
                        </li>
                        <li class="paragraph-main body-m-400">
                            <a class="link" href="<?= Url::toRoute('site/blog') ?>">Блог</a>
                        </li>
                        <li class="paragraph-main body-m-400">
                            <a class="link" href="<?= Url::toRoute('/site/about-us') ?>">О компании</a>
                        </li>
                        <li class="paragraph-main body-m-400">
                            <a class="link" href="<?= Url::toRoute('/site/contacts') ?>">Контакты</a>
                        </li>
                        <li class="d-lg-none paragraph-main paragraph-main-link body-m-400">
                            <a class="link link-burger-menu" href="#exampleModal" data-bs-toggle="modal"
                               data-bs-target="#exampleModal">Оставить заявку</a>
                        </li>
                        <li class="d-lg-none burger-menu-close position-absolute">
                            <button class="btn-close"></button>
                        </li>
                    </ul>
                    <button class="btn burger-menu-open d-block d-lg-none">
                        <img class="burger-menu-open-image"
                             src="<?= Yii::getAlias('@web/images/icons/icon_menu.png') ?>" alt="">
                    </button>
                </div>
            </div>
            <div>
                <button class="btn-request btn-request-secondary btn-request-secondary-outline body-m-400 d-none d-lg-block"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Оставить заявку
                </button>
            </div>
        </div>
    </div>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <?php
    if (!empty($this->params['breadcrumbs'])): ?>
        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
    <?php
    endif ?>
    <?= Alert::widget() ?>
    <?= $content ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog feedback-modal-container modal-dialog-centered">
            <div class="modal-content feedback-modal">
                <button type="button" class="btn-close m-3 position-absolute end-0" data-bs-dismiss="modal" aria-label="Close"></button>
                <p class="heading header-l-700">Оставьте контакты для связи</p>
                <?= ConsultationFeedbackFormWidget::widget() ?>
            </div>
        </div>
    </div>
    <?php
    if (Yii::$app->session->hasFlash('send_form')) { ?>
        <div class="modal fade" id="successModal" tabindex="-1" aria-modal="true">
            <div class="modal-dialog success-modal-container modal-dialog-centered">
                <div class="modal-content success-modal d-flex flex-column align-items-start">
                    <p class="header-l-700">Заявка принята</p>
                    <p class="body-m-400">Скоро мы свяжемся</p>
                    <button type="button"
                            class="btn-request btn-request-primary btn-request-primary-fill body-m-400 mt-4 mt-sm-5"
                            data-bs-dismiss="modal">Понятно
                    </button>
                </div>
            </div>
        </div>
        <?php
    } ?>
</main>

<footer id="footer" class="footer main-background position-relative">
    <div class="main-container">
        <p class="paragraph-heading header-l-700">Свяжитесь с нами</p>
        <div class="d-flex flex-column flex-lg-row">
            <div class="contact-us">
                <p class="paragraph-main body-xl-600">Оставьте заявку и получите бесплатную юридическую консультацию
                    по телефону</p>
                <ul class="contact-us-list p-0 body-s-400 d-none d-sm-block">
                    <li class="contact-us-list-item">
                        <p class="paragraph-main">В команде нет менеджеров. По заявке перезвонит профильный
                            специалист -
                            он ответит на любой вопрос.</p>
                    </li>
                    <li class="contact-us-list-item">
                        <p class="paragraph-main">Консультируем простым языком и по делу, заранее изучаем
                            документы и
                            похожие кейсы.</p>
                    </li>
                    <li class="contact-us-list-item">
                        <p class="paragraph-main">Предлагаем эффективную стратегию и понятные шаги для
                            лучшего решения
                            вопроса.</p>
                    </li>
                </ul>
                <div class="mt-5">
                    <a class="me-3" href="tel:89125225131"><img
                                src="<?= Yii::getAlias('@web/images/icons/whatsapp.png') ?>"
                                alt=""></a>
                    <a class="me-3" href="tel:89125225131"><img
                                src="<?= Yii::getAlias('@web/images/icons/viber.png') ?>"
                                alt=""></a>
                    <a class="me-3" href="https://t.me/Klevtsur_Oleg"><img
                                src="<?= Yii::getAlias('@web/images/icons/telegram.png') ?>" alt=""></a>
                    <a class="me-3" href="https://vk.com/legalexpert_kurgan"><img
                                src="<?= Yii::getAlias('@web/images/icons/vk.png') ?>" alt=""></a>
                </div>
            </div>
            <div class="mt-lg-0 mt-5">
                <?= ConsultationFeedbackFormWidget::widget() ?>
            </div>
        </div>
        <div class="w-100 d-flex flex-column flex-lg-row justify-content-between footer-info body-s-400 ">
            <p class="paragraph-main"><a href="#" class="link">Правовая информация</a></p>
            <p class="paragraph-main">© 2022 «Maxim Консалтинг»</p>
        </div>
    </div>
    <img class="position-absolute top-0 end-0 d-none d-xxl-block"
         src="<?= Yii::getAlias('@web/images/half-circle-red.png') ?>" alt="">
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script>
    let successModel = new bootstrap.Modal(document.getElementById('successModal'), {
        keyboard: false
    });

    successModel.show();
</script>
<?php
$this->endBody() ?>
</body>
</html>
<?php
$this->endPage() ?>
