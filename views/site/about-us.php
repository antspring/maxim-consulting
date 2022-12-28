<?php
/** @var yii\web\View $this */

use app\components\ServicesWidget;

$this->title = 'О компании | Maxim Консалтинг';
$this->registerMetaTag(['name' => 'title', 'content' => 'О компании']);
?>
<div class="round-container position-relative">
    <section class="about-us">
        <div class="main-container">
            <div class="main-heading d-flex flex-column flex-lg-row">
                <div class="heading-container body-m-400">
                    <h1 class="heading header-xl-700">
                        О компании
                    </h1>
                    <p class="mt-5 price-paragraph">
                        Главная задача — качественные и профессиональные юридические услуги.
                        В нашей команде нет менеджеров и стажеров, только эксперты
                        с многолетним опытом в своей области. Мы стараемся решить вопросы клиента, сэкономив его время и
                        деньги.
                    </p>
                    <p class="price-paragraph">
                        Не даем гарантии успеха, пока не изучим вопрос, прогноз решения делаем только после детального
                        рассмотрения документов.
                        На все время работы с вами остается персональный юрист: за его плечами опыт в похожей ситуации.
                        Он
                        сообщает даже о небольших промежуточных итогах, потому что мы понимаем, как важна обратная
                        связь.
                    </p>
                </div>
                <img class="about-us-image" src="<?= Yii::getAlias('@web/images/1D9A2676-Edit.png') ?>" alt="">
                <img class="round-main position-absolute bottom-0 end-0"
                     src="<?= Yii::getAlias('@web/images/Round.png') ?>"
                     alt="">
            </div>
        </div>
    </section>
</div>
<div class="main-container">
    <section class="supervisor">
        <h2 class="heading header-l-700">Руководитель</h2>
        <div class="supervisor-info d-flex flex-column-reverse flex-lg-row">
            <div class="supervisor-info-text body-m-400">
                <p class="supervisor-info-name header-m-600">Олег Клевцур</p>
                <p class="supervisor-info-grey-text">
                    Специализация — банкротство, юридическое сопровождение и защита
                    бизнеса, досудебное урегулирование, арбитражные споры, споры в судах.
                </p>
                <p>
                    Окончил Современную гуманитарную академию по направлению «Юриспруденция» в 2004 году. Практик с
                    15-летним опытом.
                </p>
                <p>
                    «При должном профессиональном подходе к поставленной задаче возможно решить проблему и удовлетворить
                    потребность любого клиента, если, конечно,
                    это не выходит за рамки законодательства РФ. У наших юристов колоссальный опыт работы. Они обладают
                    знаниями, уникальными компетенциями в самых разных отраслях юриспруденции, сконцентрированных в
                    одной
                    организации. Такого, возможно, нет нигде».
                </p>
            </div>
            <img class="supervisor-image my-3 my-lg-0" src="<?= Yii::getAlias('@web/images/1D9A3007.jpg') ?>" alt="">
        </div>
    </section>
    <section class="lawyers">
        <h2 class="heading header-l-700">Наши юристы</h2>
        <div class="lawyers-container row header-m-600">
            <div class="lawyers-item col-lg-3 col-sm-6 col-xs-12">
                <img class="lawyers-image" src="<?= Yii::getAlias('@web/images/1D9A2979.jpg') ?>" alt="">
                <p class="lawyers-item-text mt-3">Виктор Карпухин</p>
            </div>
            <div class="lawyers-item col-lg-3 col-sm-6 col-xs-12">
                <img class="lawyers-image" src="<?= Yii::getAlias('@web/images/1D9A2689.jpg') ?>" alt="">
                <p class="lawyers-item-text mt-3">Елена Сорокун</p>
            </div>
            <div class="lawyers-item col-lg-3 col-sm-6 col-xs-12">
                <img class="lawyers-image" src="<?= Yii::getAlias('@web/images/1D9A2879.jpg') ?>" alt="">
                <p class="lawyers-item-text mt-3">Марина Коюшкова</p>
            </div>
            <div class="lawyers-item col-lg-3 col-sm-6 col-xs-12">
                <img class="lawyers-image" src="<?= Yii::getAlias('@web/images/1D9A2751.jpg') ?>" alt="">
                <p class="lawyers-item-text mt-3">Олеся Подрядова</p>
            </div>

        </div>
    </section>
</div>
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
                           href="<?= Yii::getAlias('/site/contacts') ?>">Контакты</a>
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
<div class="main-container">
    <section class="services-cards about-us-services">
        <?= ServicesWidget::widget() ?>
    </section>
</div>

<script src="<?= Yii::getAlias('@web/js/change-request-button.js') ?>"></script>