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
    <div class="w-100 d-flex justify-content-center" style="height: 100px">
        <div class="w-100 h-100 d-flex align-items-center justify-content-between main-container">
            <div class="d-flex align-items-center justify-content-between nav-logo">
                <img src="<?= Yii::getAlias('@web/images/Logo_maxim.png') ?>" alt="">
                <div class="nav-items">
                    <ul class="d-flex m-0 p-0 nav-items-list ">
                        <li class="paragraph-main">
                            <a class="link" href="<?= Url::toRoute('/site/services') ?>">Услуги</a>
                        </li>
                        <li class="paragraph-main">
                            <a class="link" href="<?= Url::toRoute('/site/price') ?>">Цены</a>
                        </li>
                        <li class="paragraph-main">
                            <a class="link" href="<?= Url::toRoute('site/blog') ?>">Блог</a>
                        </li>
                        <li class="paragraph-main">
                            <a class="link" href="<?= Url::toRoute('/site/about-us') ?>">О компании</a>
                        </li>
                        <li class="paragraph-main">
                            <a class="link" href="<?= Url::toRoute('/site/contacts') ?>">Контакты</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <button class="btn-request btn-request-secondary btn-request-secondary-outline">Оставить заявку</button>
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
</main>

<footer id="footer" class="footer main-background position-relative">
    <div class="main-container">
        <p class="paragraph-heading">Свяжитесь с нами</p>
        <div class="d-flex ">
            <div class="contact-us">
                <p class="paragraph-main semi-bold-item">Оставьте заявку и получите бесплатную юридическую консультацию
                    по телефону</p>
                <ul class="contact-us-list p-0">
                    <li class="contact-us-list-item">
                        <p class="paragraph-main">В команде нет менеджеров. По заявке перезвонит профильный специалист -
                            он ответит на любой вопрос.</p>
                    </li>
                    <li class="contact-us-list-item">
                        <p class="paragraph-main">Консультируем простым языком и по делу, заранее изучаем документы и
                            похожие кейсы.</p>
                    </li>
                    <li class="contact-us-list-item">
                        <p class="paragraph-main">Предлагаем эффективную стратегию и понятные шаги для лучшего решения
                            вопроса.</p>
                    </li>
                </ul>
                <div class="mt-5">
                    <a class="me-3" href="tel:89125225131"><img src="<?= Yii::getAlias('@web/images/whatsapp.png') ?>"
                                                                alt=""></a>
                    <a class="me-3" href="tel:89125225131"><img src="<?= Yii::getAlias('@web/images/viber.png') ?>"
                                                                alt=""></a>
                    <a class="me-3" href="https://t.me/Klevtsur_Oleg"><img
                                src="<?= Yii::getAlias('@web/images/telegram.png') ?>" alt=""></a>
                    <a class="me-3" href="https://vk.com/legalexpert_kurgan"><img
                                src="<?= Yii::getAlias('@web/images/vk.png') ?>" alt=""></a>
                </div>
            </div>
            <div>
                <?= ConsultationFeedbackFormWidget::widget() ?>
            </div>
        </div>
        <div class="w-100 d-flex justify-content-between footer-info">
            <p class="paragraph-main"><a href="#" class="link">Правовая информация</a></p>
            <p class="paragraph-main">© 2022 «Maxim Консалтинг»</p>
        </div>
    </div>
    <img class="position-absolute top-0 end-0" src="<?= Yii::getAlias('@web/images/half-circle-red.png') ?>" alt="">
</footer>

<?php
$this->endBody() ?>
</body>
</html>
<?php
$this->endPage() ?>
