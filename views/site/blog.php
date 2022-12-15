<?php

?>
<div class="main-container">
    <section class="blog-container">
        <div class="main-heading">
            <div class="heading-container">
                <h1 class="bold-item heading">
                    Блог
                </h1>
                <div class="blog-switcher d-flex justify-content-between">
                    <button class="semi-bold-item blog-switcher-button active position-relative p-0">Все материалы
                    </button>
                    <button class="semi-bold-item blog-switcher-button position-relative p-0">Новости</button>
                    <button class="semi-bold-item blog-switcher-button position-relative p-0">Спроси юриста
                    </button>
                    <button class="semi-bold-item blog-switcher-button position-relative p-0">Наши кейсы</button>
                </div>
            </div>
        </div>
        <div class="blog-content">
            <div class="blog-content-item py-3 px-4">
                <div class="d-flex justify-content-between">
                    <a class="link" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title semi-bold-item mt-3">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
                <img src="<?= Yii::getAlias('@web/images/blog.jpg') ?>" alt="">
            </div>
            <div class="blog-content-item py-3 px-4 mt-4">
                <div class="d-flex justify-content-between">
                    <a class="link" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title semi-bold-item mt-3">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
                <img src="<?= Yii::getAlias('@web/images/blog.jpg') ?>" alt="">
            </div>
            <div class="blog-content-item py-3 px-4 mt-4">
                <div class="d-flex justify-content-between">
                    <a class="link" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title semi-bold-item mt-3">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
            </div>
            <div class="blog-content-item py-3 px-4 mt-4">
                <div class="d-flex justify-content-between">
                    <a class="link" href="#">Новости</a>
                    <p class="m-0 main-blog-item-date">20.06.2022</p>
                </div>
                <a class="link" href="#">
                    <p class="blog-content-item-title semi-bold-item mt-3">
                        Юрист по ДТП: законны ли штрафы за «среднюю
                        скорость»?
                    </p>
                </a>
                <p class="blog-content-item-text mb-4">
                    Вопрос, касающийся штрафов за «среднюю скорость», до сих пор вызывает
                    споры. СМИ с завидной периодичностью публикуют информацию об отмене любого штрафа по «средней
                    скорости» через суд, сославшись на неправомерность подобных взысканий. Общественная дискуссия
                    продолжается и по сей день, однако вышестоящие инстанции не торопятся решать данный вопрос.
                </p>
            </div>
        </div>
        <div class="blog-pagination d-flex justify-content-center">
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
