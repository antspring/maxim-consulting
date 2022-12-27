<?php

use app\components\ServicesWidget;
use app\models\Prices;

/** @var yii\web\View $this */

/** @var app\models\Prices $prices */
/** @var app\models\Prices $categories */

$this->title = 'Стоимость юридических услуг | Maxim Консалтинг';
$this->registerMetaTag(['name' => 'title', 'content' => 'Стоимость юридических услуг'])
?>

<section class="price-container position-relative">
    <div class="main-container">
        <div class="main-heading d-flex flex-column flex-lg-row justify-content-between">
            <div class="heading-container body-xl-400">
                <h1 class="heading header-xl-700">Стоимость <br> юридических услуг</h1>
                <p class="sub-heading">Что может влиять на цены:</p>
                <ul class="list-group price-list">
                    <li class="list-item position-relative">сложность дела,</li>
                    <li class="list-item position-relative">правовая отрасль,</li>
                    <li class="list-item position-relative">доказательная база и стадия судебного процесса.</li>
                </ul>
            </div>
            <img class="price-image" src="<?= Yii::getAlias('@web/images/1D9A2938 .png') ?>" alt="">
            <img class="round-main position-absolute end-0" src="<?= Yii::getAlias('@web/images/Round.png') ?>"
                 alt="">
        </div>
    </div>
</section>
<section class="price-submit-application main-background">
    <div class="main-container">
        <?= $this->render('_send-request') ?>
    </div>
</section>

<div class="main-container">
    <section class="services-price">
        <div>
            <h2 class="heading header-l-700">Цены на услуги</h2>
            <div class="services-switcher my-4 my-sm-5 d-flex">
                <button id="1"
                        class="d-flex price-switchers services-switcher-button pe-4 pe-sm-5 active position-relative header-m-600">
                    Для
                    частных
                    лиц
                </button>
                <button id="2" class="d-flex price-switchers services-switcher-button header-m-600">Для бизнеса</button>
            </div>
        </div>
        <?php
        foreach ($categories as $id => $category) { ?>
            <div id="<?= $id ?>" class="d-flex body-m-400 price-switcher-block <?php
            if ($id !== 1) {
                echo 'd-none';
            } ?>">
                <div class="services-price-category me-sm-3">
                    <?php
                    foreach (Prices::getCategoriesPrice() as $key => $name) { ?>
                        <div class="services-price-category-item mb-3 d-flex align-items-center">
                            <button id="<?= $id . '(' . $key . ')' ?>"
                                    class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                                <?= $name ?>
                            </button>
                            <button id="<?= $id . '(' . $key . ')' ?>"
                                    class="services-price-category-item-button btn d-sm-none"></button>
                        </div>
                        <?php
                    } ?>
                </div>
                <div class="services-price-list-container">
                    <?php
                    foreach ($category as $key => $price) { ?>
                        <div id="<?= $id . '(' . $key . ')' ?>" class="services-price-list ms-sm-3 d-none">
                            <div class="services-price-list-title main-background p-3 body-m-600">
                                <?= Prices::getCategoriesPrice()[$key] ?>
                            </div>
                            <?php
                            foreach ($price as $item) { ?>
                                <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                                    <?php
                                    if (!$item->description) { ?>
                                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0"><?= $item->title ?></p>
                                        <p class="m-3 services-price-list-item-number"><?= $item->price ?> ₽</p>
                                        <?php
                                    } else { ?>
                                        <div class="d-flex w-100 justify-content-between align-items-center">
                                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100"><?= $item->title ?></p>
                                            <div class="position-relative">
                                                <button id="<?= $item->id ?>"
                                                        class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                                <div id="<?= $item->id ?>"
                                                     class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                                    <?= $item->description ?>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="m-3 services-price-list-item-number"><?= $item->price ?></p>
                                        <?php
                                    } ?>
                                </div>
                                <?php
                            } ?>
                        </div>
                        <?php
                    } ?>
                </div>
            </div>
            <?php
        } ?>
    </section>
    <section class="services-cards">
        <?= ServicesWidget::widget() ?>
    </section>
</div>
<script src="<?= Yii::getAlias('@web/js/change-burger-button.js') ?>"></script>
<script>
    let buttons_category = document.querySelectorAll('.btn-service-price'),
        buttons_info = document.querySelectorAll('.services-price-list-item-button'),
        blocks_info = document.querySelectorAll('.services-price-list-item-info'),
        blocks = document.querySelectorAll('.services-price-list'),
        buttons_switcher = document.querySelectorAll('.price-switchers'),
        price_switchers = document.querySelectorAll('.price-switcher-block');

    buttons_switcher.forEach(button => {
        button.onclick = function (event) {
            buttons_switcher.forEach(item => {
                item.classList.remove('active');
            })
            event.target.classList.add('active');
            price_switchers.forEach(price_switcher => {
                price_switcher.classList.add('d-none');
                if (event.target.id === price_switcher.id) {
                    price_switcher.classList.remove('d-none');
                }
            })
        }
    });

    buttons_info.forEach(button => {
        button.onclick = function (event) {
            blocks_info.forEach(block => {
                block.classList.add('d-none');
                if (block.id === event.target.id) {
                    block.classList.remove('d-none');
                }
            })
        }
    })

    if (window.innerWidth >= 576) {
        buttons_category.forEach(button => {
            button.onclick = function (event) {
                buttons_category.forEach(btn => {
                    btn.classList.remove('main-background');
                    btn.classList.remove('body-m-600');
                })
                event.target.classList.add('main-background');
                event.target.classList.add('body-m-600');
                blocks.forEach(block => {
                    block.classList.add('d-none');
                    if (block.id === event.target.id) {
                        block.classList.remove('d-none');
                    }
                })
            }
        })
    }

    let buttons_adaptive = document.querySelectorAll('.services-price-category-item-button');

    buttons_adaptive.forEach(button_adaptive => {
        button_adaptive.onclick = function (event) {
            buttons_adaptive.forEach(item => {
                item.classList.remove('services-price-category-item-button-active')
            })
            event.target.classList.add('services-price-category-item-button-active');
            blocks.forEach(block => {
                block.classList.add('d-none');
                if (block.id === event.target.id) {
                    block.classList.remove('d-none');
                    button_adaptive.parentElement.after(block.parentElement);
                }
            })
        }
    })
</script>