<?php
/** @var yii\web\View $this */

$this->title = 'Стоимость юридических услуг | Maxim Консалтинг'
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
                <button id="1" class="d-flex price-switchers services-switcher-button pe-4 pe-sm-5 active position-relative header-m-600">Для
                    частных
                    лиц
                </button>
                <button id="2" class="d-flex price-switchers services-switcher-button header-m-600">Для бизнеса</button>
            </div>
        </div>
        <div id="1" class="d-flex justify-content-between body-m-400 price-switcher-block">
            <div class="services-price-category me-sm-3">
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="1" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        По гражданским делам
                    </button>
                    <button id="1" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="2" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        По административным делам
                    </button>
                    <button id="2" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="3" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        По делам в соответствии с КАС РФ
                    </button>
                    <button id="3" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="4" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        Консалтинг, договоры, правовые документы и пр.
                    </button>
                    <button id="4" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
            </div>
            <div class="services-price-list-container">
                <div id="1" class="services-price-list ms-sm-3 d-none">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        По гражданским делам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Досудебный порядок урегулирования спора (представительство за день участия)</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление претензии</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление искового заявления</p>
                        <p class="m-3 services-price-list-item-number">5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление отзыва, возражения на исковое заявление</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление заявления о выдаче судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">4 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">
                            Составление процессуальных документов при рассмотрении дела судом (заявления,
                            ходатайства, объяснения и др.)
                        </p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">
                            Представительство в суде первой инстанции (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div id="2" class="services-price-list ms-sm-3 d-none">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        По административным делам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Ознакомление с материалами</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">
                            Представительство при рассмотрении дела о привлечении к административной
                            ответственности (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">
                            Составление жалобы на постановление о привлечении
                            к административной ответственности
                        </p>
                        <p class="m-3 services-price-list-item-number">3 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">
                            Представительство в административном судопроизводстве
                            (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Составление жалобы на постановление суда о привлечении
                            (об отказе в привлечении) к административной ответственности</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Составление процессуальных документов при рассмотрении дела
                            судом (заявления,
                            ходатайства,
                            объяснения и др.)</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Представительство в суде первой инстанции (за день
                            участия)</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div id="3" class="services-price-list ms-sm-3 d-none">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        Делопроизводство по товарным знакам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Первичная консультация</p>
                            <div class="position-relative">
                                <button id="1" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="1" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">
                                Полная проверка обозначения на уникальность
                                (проводится среди тождественных и сходных обозначений)
                            </p>
                            <div class="position-relative">
                                <button id="2" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="2" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 8 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Подача заявки на регистрацию обозначения без ведения делопроизводства</p>
                            <div class="position-relative">
                                <button id="3" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="3" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 11 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">
                                Подготовка пакета документов, подача заявки на обозначение, ведение
                                делопроизводства, получение решения о регистрации или об отказе в регистрации, получение и
                                передача свидетельства
                            </p>
                            <div class="position-relative">
                                <button id="4" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="4" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 20 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">
                                Ответы на возможные запросы от регулирующего органа, требующие экспертной работы,
                                подготовка возражений по противопоставлениям
                            </p>
                            <div class="position-relative">
                                <button id="5" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="5" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Доработка дизайна до уникальности для устранения препятствий при регистрации
                                обозначения</p>
                            <div class="position-relative">
                                <button id="6" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="6" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">По запросу</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Регистрация договора лицензии отчуждения на одно обозначение</p>
                            <div class="position-relative">
                                <button id="7" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="7" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 15 000 ₽</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="2" class="d-flex justify-content-between body-m-400 price-switcher-block d-none">
            <div class="services-price-category me-sm-3">
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="5" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        По гражданским делам
                    </button>
                    <button id="5" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="6" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        По административным делам
                    </button>
                    <button id="6" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="7" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        По делам в соответствии с КАС РФ
                    </button>
                    <button id="7" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
                <div class="services-price-category-item mb-3 d-flex align-items-center">
                    <button id="8" class="btn p-3 px-sm-2 py-sm-3 px-lg-4 py-lg-3 w-100 d-flex align-items-start btn-service-price text-start services-price-category-button position-relative">
                        Консалтинг, договоры, правовые документы и пр.
                    </button>
                    <button id="8" class="services-price-category-item-button btn d-sm-none"></button>
                </div>
            </div>
            <div class="services-price-list-container">
                <div id="5" class="services-price-list ms-sm-3 d-none">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        По гражданским делам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Досудебный порядок урегулирования спора (представительство за день участия)</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление претензии</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление искового заявления</p>
                        <p class="m-3 services-price-list-item-number">5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление отзыва, возражения на исковое заявление</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление заявления о выдаче судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">4 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">
                            Составление процессуальных документов при рассмотрении дела судом (заявления,
                            ходатайства, объяснения и др.)
                        </p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="services-price-list-item-text m-sm-3 mx-3 mt-3 mb-0">
                            Представительство в суде первой инстанции (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div id="6" class="services-price-list ms-sm-3 d-none">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        По административным делам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Ознакомление с материалами</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">
                            Представительство при рассмотрении дела о привлечении к административной
                            ответственности (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">
                            Составление жалобы на постановление о привлечении
                            к административной ответственности
                        </p>
                        <p class="m-3 services-price-list-item-number">3 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">
                            Представительство в административном судопроизводстве
                            (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Составление жалобы на постановление суда о привлечении
                            (об отказе в привлечении) к административной ответственности</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Составление процессуальных документов при рассмотрении дела
                            судом (заявления,
                            ходатайства,
                            объяснения и др.)</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <p class="m-sm-3 mx-3 mt-3 mb-0">Представительство в суде первой инстанции (за день
                            участия)</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div id="7" class="services-price-list ms-sm-3 d-none">
                    <div class="services-price-list-title main-background p-3 body-m-600">
                        Делопроизводство по товарным знакам
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Первичная консультация</p>
                            <div class="position-relative">
                                <button id="1" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="1" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">
                                Полная проверка обозначения на уникальность
                                (проводится среди тождественных и сходных обозначений)
                            </p>
                            <div class="position-relative">
                                <button id="2" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="2" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 8 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Подача заявки на регистрацию обозначения без ведения делопроизводства</p>
                            <div class="position-relative">
                                <button id="3" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="3" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 11 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">
                                Подготовка пакета документов, подача заявки на обозначение, ведение
                                делопроизводства, получение решения о регистрации или об отказе в регистрации, получение и
                                передача свидетельства
                            </p>
                            <div class="position-relative">
                                <button id="4" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="4" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 20 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">
                                Ответы на возможные запросы от регулирующего органа, требующие экспертной работы,
                                подготовка возражений по противопоставлениям
                            </p>
                            <div class="position-relative">
                                <button id="5" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="5" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">От 5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Доработка дизайна до уникальности для устранения препятствий при регистрации
                                обозначения</p>
                            <div class="position-relative">
                                <button id="6" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="6" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
                        <p class="m-3 services-price-list-item-number">По запросу</p>
                    </div>
                    <div class="services-price-list-item d-flex flex-column flex-lg-row justify-content-between">
                        <div class="d-flex w-100 justify-content-between align-items-center">
                            <p class="m-sm-3 mx-3 mt-3 mb-0 w-100">Регистрация договора лицензии отчуждения на одно обозначение</p>
                            <div class="position-relative">
                                <button id="7" class="btn services-price-list-item-button me-3 me-lg-0"></button>
                                <div id="7" class="position-absolute services-price-list-item-info d-none body-s-400 ">
                                    Проведение проверки по одному обозначению
                                    для 1–3 классов МКТУ + 2 000 ₽ за каждый класс выше 3-го. По итогам проверки заказчику предоставляется экспертное заключение.
                                </div>
                            </div>
                        </div>
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
<script>
    let buttons_category = document.querySelectorAll('.btn-service-price'),
        buttons_info = document.querySelectorAll('.services-price-list-item-button'),
        blocks_info = document.querySelectorAll('.services-price-list-item-info'),
        blocks = document.querySelectorAll('.services-price-list'),
        buttons_switcher = document.querySelectorAll('.price-switchers'),
        price_switchers = document.querySelectorAll('.price-switcher-block');

    buttons_switcher.forEach(button => {
        button.onclick = function (event){
            buttons_switcher.forEach(item =>{
                item.classList.remove('active');
            })
            event.target.classList.add('active');
            price_switchers.forEach(price_switcher => {
                price_switcher.classList.add('d-none');
                if (event.target.id === price_switcher.id){
                    price_switcher.classList.remove('d-none');
                }
            })
        }
    });

    buttons_info.forEach(button => {
        button.onclick = function(event){
            blocks_info.forEach(block => {
                block.classList.add('d-none');
                if (block.id === event.target.id){
                    block.classList.remove('d-none');
                }
            })
        }
    })

    if(window.innerWidth >= 576){
        buttons_category.forEach(button => {
            button.onclick = function(event){
                buttons_category.forEach(btn => {
                    btn.classList.remove('main-background');
                    btn.classList.remove('body-m-600');
                })
                event.target.classList.add('main-background');
                event.target.classList.add('body-m-600');
                blocks.forEach(block => {
                    block.classList.add('d-none');
                    if(block.id === event.target.id){
                        block.classList.remove('d-none');
                    }
                })
            }
        })
    }

    let buttons_adaptive = document.querySelectorAll('.services-price-category-item-button');

    buttons_adaptive.forEach(button_adaptive => {
        button_adaptive.onclick = function (event){
            buttons_adaptive.forEach(item => {
                item.classList.remove('services-price-category-item-button-active')
            })
            event.target.classList.add('services-price-category-item-button-active');
            blocks.forEach(block => {
                block.classList.add('d-none');
                if(block.id === event.target.id){
                    block.classList.remove('d-none');
                    button_adaptive.parentElement.after(block.parentElement);
                }
            })
        }
    })
</script>