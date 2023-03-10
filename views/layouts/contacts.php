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
\app\assets\ContactsAsset::register($this);

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
                            <a class="link" href="<?= Url::toRoute('/service') ?>">Услуги</a>
                        </li>
                        <li class="paragraph-main body-m-400">
                            <a class="link" href="<?= Url::toRoute('/site/price') ?>">Цены</a>
                        </li>
                        <li class="paragraph-main body-m-400">
                            <a class="link" href="<?= Url::toRoute('/blog') ?>">Блог</a>
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
                <button id="btn-request"
                        class="btn-request btn-request-secondary btn-request-secondary-outline body-m-400 d-none d-lg-block mb-sm-3"
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content feedback-modal align-items-end">
                <button type="button" class="btn-close m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                <p class="heading header-l-700">Оставьте контакты для связи</p>
                <?= ConsultationFeedbackFormWidget::widget() ?>
            </div>
        </div>
    </div>
</main>
<div class="contacts-footer">
    <footer id="footer" class="footer position-relative">
        <div class="main-background contacts-container">
            <div class="main-container mt-0">
                <p class="paragraph-heading header-l-700">Контакты</p>
                <select class="contacts-select py-2 px-3 body-m-400" name="city" id="">
                    <option value="1">Курган</option>
                    <option value="2">Тюмень</option>
                    <option value="3">Набережные Челны</option>
                    <option value="4">Краснодар</option>
                </select>
                <div class="d-flex flex-column flex-sm-row justify-content-between contacts-info body-m-400">
                    <div>
                        <div class="d-flex align-items-center mb-4">
                            <img class="me-3" src="<?= Yii::getAlias('@web/images/icons/address.png') ?>" alt="">
                            <p class="m-0 contact-address">Курган, ул. Радионова, 17</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <img class="me-3" src="<?= Yii::getAlias('@web/images/icons/time.png') ?>" alt="">
                            <p class="m-0 contact-time">Пн. - пт. - с 9:00 до 18:00</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <img class="me-3" src="<?= Yii::getAlias('@web/images/icons/phone.png') ?>" alt="">
                            <p class="m-0 contact-tel">+7 3522 200-444</p>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <img class="me-3" src="<?= Yii::getAlias('@web/images/icons/email.png') ?>" alt="">
                            <p class="m-0 contact-email">consult@maxim.company</p>
                        </div>
                        <div class="contacts-social-networks">
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
                    <div class="contacts-map" style="position:relative;overflow:hidden;">
                        <a href="https://yandex.ru/maps/53/kurgan/?utm_medium=mapframe&utm_source=maps"
                           style="color:#eee;font-size:12px;position:absolute;top:0px;">Курган</a>
                        <a href="https://yandex.ru/maps/53/kurgan/house/ulitsa_radionova_17/YkwYdQZiQUMBQFtvfXhyeH1ibQ==/?ll=65.312866%2C55.439119&utm_medium=mapframe&utm_source=maps&z=17.21"
                           style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Радионова, 17 —
                            Яндекс Карты</a>
                        <iframe src="https://yandex.ru/map-widget/v1/-/CCUn5KvVGC" class="w-100 h-100" frameborder="1"
                                allowfullscreen="true" style="position:relative;"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container contacts-requisites body-m-400 ">
            <p class="paragraph-heading header-l-700">Реквизиты</p>
            <p class="blog-content-item-title header-m-600">Наименование</p>
            <p>ООО «УПРАВЛЕНИЕ РЕГИОНАМИ»</p>
            <p>ОГРН 1104501004740</p>
            <p class="blog-content-item-title header-m-600">Банковские реквизиты</p>
            <p>
                Банк: Курганское отделение № 8599 ПАО Сбербанк
            </p>
            <p>
                Расчетный счет: 40702810532000001413
            </p>
            <p>
                Корр. счет: 30101810100000000650
            </p>
            <p>
                ИНН: 4501161292
            </p>
            <p>
                КПП: 450101001
            </p>
            <p>
                БИК банка: 043735650
            </p>
            <p>
                Юридический адрес: 640003, Курганская обл., г. Курган, ул. Радионова, 17, оф. 3
            </p>
            <p>
                Почтовый адрес: 640003, Курганская обл., г. Курган, ул. Радионова, 17
            </p>
            <p>
                Генеральный директор: Шушарин Максим Викторович
            </p>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<?php
$this->endBody() ?>
</body>
</html>
<?php
$this->endPage() ?>
