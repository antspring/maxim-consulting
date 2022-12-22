<?php
/** @var yii\web\View $this */

$this->title = 'Блог | Maxim Консалтинг';
?>
<div class="main-container">
    <section class="blog-container">
        <div class="main-heading">
            <div class="heading-container">
                <h1 class="heading header-xl-700">
                    Блог
                </h1>
                <div class="blog-switcher d-flex justify-content-between">
                    <button class="blog-switcher-button active position-relative p-0 body-xl-600">Все материалы
                    </button>
                    <button class="blog-switcher-button position-relative p-0 body-xl-400">Новости</button>
                    <button class="blog-switcher-button position-relative p-0 body-xl-400">Спроси юриста
                    </button>
                    <button class="blog-switcher-button position-relative p-0 body-xl-400">Наши кейсы</button>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="blog-content-item py-3 px-4">
                <div class="d-flex justify-content-between">
                    <a class="link body-s-400" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date body-s-400">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title mt-3 header-m-600">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4 body-m-400">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
                <img src="<?= Yii::getAlias('@web/images/blog.jpg') ?>" alt="">
            </div>
            <div class="blog-content-item py-3 px-4 mt-4">
                <div class="d-flex justify-content-between">
                    <a class="link body-s-400" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date body-s-400">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title mt-3 header-m-600">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4 body-m-400">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
                <img src="<?= Yii::getAlias('@web/images/blog.jpg') ?>" alt="">
            </div>
            <div class="blog-content-item py-3 px-4 mt-4">
                <div class="d-flex justify-content-between">
                    <a class="link body-s-400" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date body-s-400">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title mt-3 header-m-600">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4 body-m-400">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
            </div>
            <div class="blog-content-item py-3 px-4 mt-4">
                <div class="d-flex justify-content-between">
                    <a class="link body-s-400" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date body-s-400">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title mt-3 header-m-600">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4 body-m-400">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
            </div>
        </div>
        <div class="blog-pagination d-flex body-l-400">
            <a class="link" href="#">Назад</a>
            <a class="link m-0" href="#">
                <p class="blog-pagination-number me-3 current-pagination-number">1</p>
            </a>
            <a class="link m-0" href="#">
                <p class="blog-pagination-number me-3">2</p>
            </a>
            <a class="link m-0" href="#">
                <p class="blog-pagination-number me-3">3</p>
            </a>
            <a class="link m-0" href="#">
                <p class="blog-pagination-number me-3">4</p>
            </a>
            <a class="link m-0" href="#">
                <p class="blog-pagination-number">5</p>
            </a>
            <a class="link active" href="#">Дальше</a>
        </div>
    </section>
    <section class="services-cards">
        <?= $this->render('_services') ?>
    </section>
</div>

<script src="<?= Yii::getAlias('@web/js/change-button.js') ?>"></script>