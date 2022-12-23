<?php
/** @var yii\web\View $this */

$this->title = 'Стоимость юридических услуг | Maxim Консалтинг'
?>

<section class="price-container position-relative">
    <div class="main-container">
        <div class="main-heading d-flex flex-column flex-lg-row align-items-end justify-content-between">
            <div class="heading-container body-xl-400">
                <h1 class="heading header-xl-700">Стоимость <br> юридических услуг</h1>
                <p class="sub-heading">Что может влиять на цены:</p>
                <ul class="list-group price-list" style="margin-bottom: 120px">
                    <li class="list-item position-relative">сложность дела,</li>
                    <li class="list-item position-relative">правовая отрасль,</li>
                    <li class="list-item position-relative">доказательная база и стадия судебного процесса.</li>
                </ul>
            </div>
            <img class="price-image" src="<?= Yii::getAlias('@web/images/1D9A2938 .png') ?>" alt="">
            <img class="position-absolute price-container-img bottom-0 end-0"
                 src="<?= Yii::getAlias('@web/images/Round.png') ?>" alt="">
        </div>
    </div>
</section>
<section class="submit-application main-background">
    <div class="main-container">
        <?= $this->render('_send-request') ?>
    </div>
</section>

<div class="main-container">
    <section class="services-price">
        <div>
            <h2 class="heading header-l-700">Цены на услуги</h2>
            <div class="services-switcher my-5 header-m-600">
                <button class="services-switcher-button pe-5 active position-relative">
                    Для частных лиц
                </button>
                <button class="services-switcher-button">Для бизнеса</button>
            </div>
        </div>
        <div class="d-flex justify-content-between body-m-400">
            <div class="services-price-category me-3">
                <div class="services-price-category-item px-2 py-3 px-lg-4 py-lg-3 mb-3 main-background body-m-600">
                    По гражданским делам
                </div>
                <div class="services-price-category-item px-2 py-3 px-lg-4 py-lg-3 mb-3">
                    По административным делам
                </div>
                <div class="services-price-category-item px-2 py-3 px-lg-4 py-lg-3 mb-3">
                    По делам в соответствии с КАС РФ
                </div>
                <div class="services-price-category-item px-2 py-3 px-lg-4 py-lg-3 mb-3">
                    Консалтинг, договоры, правовые документы и пр.
                </div>
            </div>
            <div class="services-price-list-container">
                <div class="services-price-list ms-3">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        По гражданским делам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Досудебный порядок урегулирования спора (представительство за день участия)</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление претензии</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление искового заявления</p>
                        <p class="m-3 services-price-list-item-number">5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление отзыва, возражения на исковое заявление</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление заявления о выдаче судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">4 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Составление процессуальных документов при рассмотрении дела судом (заявления,
                            ходатайства, объяснения и др.)
                        </p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Представительство в суде первой инстанции (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div class="services-price-list ms-3">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        По административным делам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Ознакомление с материалами</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Представительство при рассмотрении дела о привлечении к административной
                            ответственности (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Составление жалобы на постановление о привлечении
                            к административной ответственности
                        </p>
                        <p class="m-3 services-price-list-item-number">3 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Представительство в административном судопроизводстве
                            (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление жалобы на постановление суда о привлечении
                            (об отказе в привлечении) к административной ответственности</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Составление процессуальных документов при рассмотрении дела
                            судом (заявления,
                            ходатайства,
                            объяснения и др.)</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Представительство в суде первой инстанции (за день
                            участия)</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div class="services-price-list ms-3">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        Делопроизводство по товарным знакам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Первичная консультация</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Полная проверка обозначения на уникальность
                            (проводится среди тождественных и сходных обозначений)
                        </p>
                        <p class="m-3 services-price-list-item-number">От 8 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Подача заявки на регистрацию обозначения без ведения делопроизводства</p>
                        <p class="m-3 services-price-list-item-number">От 11 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Подготовка пакета документов, подача заявки на обозначение, ведение
                            делопроизводства, получение решения о регистрации или об отказе в регистрации, получение и
                            передача свидетельства
                        </p>
                        <p class="m-3 services-price-list-item-number">От 20 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">
                            Ответы на возможные запросы от регулирующего органа, требующие экспертной работы,
                            подготовка возражений по противопоставлениям
                        </p>
                        <p class="m-3 services-price-list-item-number">От 5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Доработка дизайна до уникальности для устранения препятствий при регистрации
                            обозначения</p>
                        <p class="m-3 services-price-list-item-number">По запросу</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-3">Регистрация договора лицензии отчуждения на одно обозначение</p>
                        <p class="m-3 services-price-list-item-number">От 15 000 ₽</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-cards">
        <?= $this->render('_services') ?>
    </section>
</div>