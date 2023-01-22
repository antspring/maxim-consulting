<?php

use app\components\ServicesWidget;

/** @var yii\web\View $this */

/** @var app\models\News $news */

\app\assets\ButtonAsset::register($this);

$this->title = 'Юридические услуги | Maxim Consulting';
$this->registerMetaTag(['name' => 'title', 'content' => 'Юридические услуги']);
?>
<div class="round-container position-relative">
    <section class="section-main main-heading main-container d-flex flex-lg-row flex-column">
        <div class="main-advantage">
            <div class="heading-container">
                <h1 class="heading header-xl-700">Юридические услуги</h1>
                <p class="heading-container-paragraph subheader-xl-600">для частных лиц и бизнеса</p>
            </div>
            <ul class="small-description-list p-0 list-group body-xl-400">
                <li class="list-item position-relative">Консультация и аудит</li>
                <li class="list-item position-relative">Подготовка документов</li>
                <li class="list-item position-relative">Сопровождение под ключ</li>
            </ul>
            <button class="btn-request btn-request-primary btn-request-primary-outline body-m-400 d-block d-lg-none mt-5"
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Оставить заявку
            </button>
        </div>
        <img class="main-heading-image"
             src="<?= Yii::getAlias('@web/images/1D9A2784.png') ?>" alt="">
        <img class="round-main position-absolute end-0" src="<?= Yii::getAlias('@web/images/Round.png') ?>"
             alt="">
    </section>
</div>
<section class="main-services main-background">
    <div class="main-container">
        <?= ServicesWidget::widget() ?>
        <?= $this->render('_send-request') ?>
    </div>
</section>
<section class="main-company-info">
    <div class="main-container">
        <h2 class="heading header-l-700">
            Сложные проблемы — <br>
            простое решение
        </h2>
        <div class="main-company-description d-flex justify-content-between flex-column flex-lg-row">
            <img class="main-company-description-image" src="<?= Yii::getAlias('@web/images/1D9A2676-Edit.jpg') ?>"
                 alt="">
            <div class="main-company-description-text d-flex flex-column justify-content-between align-items-start body-m-400">
                <div class="mt-4 mt-lg-0">
                    <p>
                        «Maxim Консалтинг» — это эксперты в разных сферах, от банкротства физлиц до правового
                        сопровождения
                        организаций. Изучаем ситуацию досконально и только потом даем прогнозы. Найдем наилучшее решение
                        и
                        простыми словами объясним стратегию. Вы получаете опыт и знания команды специалистов и
                        персонального
                        юриста, который будет вести дело от первой консультации до победы в суде.
                    </p>
                    <ul class="list-group main-company-description-list">
                        <li class="list-item position-relative">Заключаем договор, где четко, без скрытых услуг
                            прописываем
                            условия
                        </li>
                        <li class="list-item position-relative">Остаемся на связи, делимся информацией о промежуточных
                            результатах
                        </li>
                        <li class="list-item position-relative">Гарантируем конфиденциальность, кейсы об успехах -
                            только с
                            вашего согласия
                        </li>
                    </ul>
                </div>
                <a class="btn-request btn-request-primary btn-request-primary-outline link mt-xs-3 mt-sm-5 mt-xxl-0"
                   href="<?= \yii\helpers\Url::toRoute('site/about-us') ?>">Подробнее о
                    компании</a>
            </div>
        </div>
    </div>
</section>
<section class="main-stages-work main-background">
    <div class="main-container">
        <h2 class="heading header-l-700">
            Этапы работы
        </h2>
        <div class="main-stages-work-container">
            <div class="main-stages-work-item d-flex flex-column flex-md-row align-items-start">
                <img src="<?= Yii::getAlias('@web/images/1.png') ?>" alt="">
                <div class="main-stages-work-text">
                    <p class="m-0 header-m-600-italic">Заявка</p>
                    <p class="mb-3 body-m-400">Оставьте заявку на сайте или позвоните</p>
                    <div class="d-flex">
                        <button class="btn-request btn-request-primary btn-request-primary-fill me-1 me-sm-4 body-m-400"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить заявку
                        </button>
                        <a class="btn-request btn-request-primary btn-request-primary-outline link body-m-400"
                           href="<?= \yii\helpers\Url::toRoute('site/contacts') ?>">Контакты</a>
                    </div>
                </div>
            </div>
            <div class="main-stages-work-item d-flex flex-column flex-md-row align-items-start">
                <img src="<?= Yii::getAlias('@web/images/2.png') ?>" alt="">
                <div class="main-stages-work-text">
                    <p class="m-0 header-m-600-italic ">Бесплатная консультация</p>
                    <p class="body-m-400">Оценим ситуацию и предложим решение</p>
                </div>
            </div>
            <div class="main-stages-work-item d-flex flex-column flex-md-row align-items-start">
                <img src="<?= Yii::getAlias('@web/images/3.png') ?>" alt="">
                <div class="main-stages-work-text">
                    <p class="m-0 header-m-600-italic ">Заключение договора</p>
                    <p class="body-m-400">Если решаете доверить вопрос профи, обсуждаем условия и подписываем
                        документы</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-blog">
    <div class="main-container">
        <h2 class="heading header-l-700">Блог</h2>
        <div class="main-blog-item-list row">
            <?php
            foreach ($news as $new) { ?>
                <div class="main-blog-item-container col-12 col-lg-6">
                    <div class="main-blog-item d-flex flex-column flex-md-row me-1">
                        <img class="main-blog-image" src="<?= Yii::getAlias('@web/' . $new->image) ?>" alt="">
                        <div class="main-blog-item-text">
                            <a class="link"
                               href="<?= \yii\helpers\Url::toRoute(['blog/article', 'id' => $new->id]) ?>">
                                <p class="body-m-600">
                                    <?= $new->title ?>
                                </p>
                            </a>
                            <div class="d-flex justify-content-between">
                                <p class="link body-s-400" href="#"><?= $new->categoryText ?></p>
                                <p class="m-0 main-blog-item-date body-s-400"><?= Yii::$app->formatter->asDate(
                                        $new->created_at
                                    ) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
        <a class="btn-request btn-request-primary btn-request-primary-outline link body-m-400"
           href="<?= \yii\helpers\Url::toRoute('/blog') ?>">Больше новостей</a>
    </div>
</section>