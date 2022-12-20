<?php
/** @var yii\web\View $this */

$this->title = 'О компании | Maxim Консалтинг';
?>
<div class="main-container">
    <section class="about-us">
        <div class="main-heading d-flex">
            <div class="heading-container">
                <h1 class="bold-item heading">
                    О компании
                </h1>
                <p class="mt-5">
                    Главная задача — качественные и профессиональные юридические услуги.
                    В нашей команде нет менеджеров и стажеров, только эксперты
                    с многолетним опытом в своей области. Мы стараемся решить вопросы клиента, сэкономив его время и
                    деньги.
                </p>
                <p class="">
                    Не даем гарантии успеха, пока не изучим вопрос, прогноз решения делаем только после детального
                    рассмотрения документов.
                    На все время работы с вами остается персональный юрист: за его плечами опыт в похожей ситуации. Он
                    сообщает даже о небольших промежуточных итогах, потому что мы понимаем, как важна обратная связь.
                </p>
            </div>
            <img src="<?= Yii::getAlias('@web/images/1D9A2676-Edit.png') ?>" alt="">
            <img class="round-main position-absolute top-0 end-0" src="<?= Yii::getAlias('@web/images/Round.png') ?>"
                 alt="">
        </div>
    </section>
    <section class="supervisor">
        <h2 class="bold-item heading">Руководитель</h2>
        <div class="supervisor-info d-flex">
            <div class="supervisor-info-text">
                <p class="supervisor-info-name semi-bold-item">Олег Клевцур</p>
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
            <img src="<?= Yii::getAlias('@web/images/1D9A3007.jpg') ?>" alt="">
        </div>
    </section>
    <section class="lawyers">
        <h2 class="bold-item heading">Наши юристы</h2>
        <div class="lawyers-container row">
            <div class="lawyers-item col-3">
                <img src="<?= Yii::getAlias('@web/images/1D9A2979.jpg') ?>" alt="">
                <p class="lawyers-item-text semi-bold-item mt-3">Виктор Карпухин</p>
            </div>
            <div class="lawyers-item col-3">
                <img src="<?= Yii::getAlias('@web/images/1D9A2689.jpg') ?>" alt="">
                <p class="lawyers-item-text semi-bold-item mt-3">Елена Сорокун</p>
            </div>
            <div class="lawyers-item col-3">
                <img src="<?= Yii::getAlias('@web/images/1D9A2879.jpg') ?>" alt="">
                <p class="lawyers-item-text semi-bold-item mt-3">Марина Коюшкова</p>
            </div>
            <div class="lawyers-item col-3">
                <img src="<?= Yii::getAlias('@web/images/1D9A2751.jpg') ?>" alt="">
                <p class="lawyers-item-text semi-bold-item mt-3">Олеся Подрядова</p>
            </div>

        </div>
    </section>
</div>
<section class="main-stages-work main-background">
    <div class="main-container">
        <h2 class="bold-item heading">
            Этапы работы
        </h2>
        <div class="main-stages-work-container">
            <div class="main-stages-work-item d-flex align-items-start">
                <img src="<?= Yii::getAlias('@web/images/1.png') ?>" alt="">
                <div class="main-stages-work-text">
                    <p class="paragraph-italic m-0">Заявка</p>
                    <p class="mb-3">Оставьте заявку на сайте или позвоните</p>
                    <div class="d-flex">
                        <button class="btn-request btn-request-primary btn-request-primary-fill me-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Оставить заявку
                        </button>
                        <a class="btn-request btn-request-primary btn-request-primary-outline link" href="#">Контакты и
                            адреса офиса</a>
                    </div>
                </div>
            </div>
            <div class="main-stages-work-item d-flex align-items-start">
                <img src="<?= Yii::getAlias('@web/images/2.png') ?>" alt="">
                <div class="main-stages-work-text">
                    <p class="paragraph-italic m-0">Бесплатная консультация</p>
                    <p>Оценим ситуацию и предложим решение</p>
                </div>
            </div>
            <div class="main-stages-work-item d-flex align-items-start">
                <img src="<?= Yii::getAlias('@web/images/3.png') ?>" alt="">
                <div class="main-stages-work-text">
                    <p class="paragraph-italic m-0">Заключение договора</p>
                    <p>Если решаете доверить вопрос профи, обсуждаем условия и подписываем документы</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="main-container">
    <section class="services-cards">
        <?= $this->render('_services') ?>
    </section>
</div>