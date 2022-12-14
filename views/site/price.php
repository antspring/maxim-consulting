<?php
/** @var yii\web\View $this */

$this->title = 'Стоимость юридических услуг | Maxim Консалтинг'
?>

<section class="price-container">
    <div class="main-container">
        <div class="main-heading d-flex justify-content-between">
            <div class="heading-container">
                <h1 class="bold-item heading">Стоимость юридических услуг</h1>
                <p class="sub-heading">Что может влиять на цены:</p>
                <ul class="list-group" style="margin-bottom: 120px">
                    <li class="list-item position-relative">сложность дела,</li>
                    <li class="list-item position-relative">правовая отрасль,</li>
                    <li class="list-item position-relative">доказательная база и стадия судебного процесса.</li>
                </ul>
            </div>
            <img src="<?= Yii::getAlias('@web/images/1D9A2938 .png') ?>" alt="">
            <img class="position-absolute price-container-img top-0 end-0"
                 src="<?= Yii::getAlias('@web/images/Round.png') ?>" alt="">
        </div>
    </div>
</section>
<section class="submit-application">
    <div class="services-request main-background">
        <div class="main-container">
            <p class="paragraph-italic mb-2">
                Оставьте заявку на бесплатную консультацию
            </p>
            <p class="m-0">Оценим дела и предложим эффективную стратегию</p>
            <button class="btn-request btn-request-primary btn-request-primary-fill mt-4">Оставить заявку</button>
        </div>
    </div>
</section>

<div class="main-container">
    <section class="services-price">
        <div>
            <h2 class="bold-item heading">Цены на услуги</h2>
            <div class="services-switcher my-5">
                <button class="semi-bold-item services-switcher-button pe-5 active position-relative">
                    Для частных лиц
                </button>
                <button class="semi-bold-item services-switcher-button">Для бизнеса</button>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div class="services-price-category me-3">
                <div class="services-price-category-item px-4 py-3 mb-3 main-background">
                    По гражданским делам
                </div>
                <div class="services-price-category-item p-4 py-3 mb-3">
                    По административным делам
                </div>
                <div class="services-price-category-item p-4 py-3 mb-3">
                    По делам в соответствиис КАС РФ
                </div>
                <div class="services-price-category-item p-4 py-3 mb-3">
                    Консалтинг, договоры, правовые документы и пр.
                </div>
            </div>
            <div class="services-price-list-container">
                <div class="services-price-list ms-3">
                    <div class="services-price-list-title semi-bold-item main-background p-3">
                        По гражданским делам
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Досудебный порядок урегулирования спора (представительство за день участия)</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление претензии</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление искового заявления</p>
                        <p class="m-3 services-price-list-item-number">5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление отзыва, возражения на исковое заявление</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление заявления о выдаче судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">4 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Составление процессуальных документов при рассмотрении дела судом (заявления,
                            ходатайства, объяснения и др.)
                        </p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Представительство в суде первой инстанции (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div class="services-price-list ms-3">
                    <div class="services-price-list-title semi-bold-item main-background p-3">
                        По административным делам
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Ознакомление с материалами</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Представительство при рассмотрении дела о привлечении к административной
                            ответственности (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Составление жалобы на постановление о привлечении
                            к административной ответственности
                        </p>
                        <p class="m-3 services-price-list-item-number">3 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Представительство в административном судопроизводстве
                            (за день участия)
                        </p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление жалобы на постановление суда о привлечении
                            (об отказе в привлечении) к административной ответственности</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление заявления об отмене судебного приказа</p>
                        <p class="m-3 services-price-list-item-number">3 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Составление процессуальных документов при рассмотрении дела
                            судом (заявления,
                            ходатайства,
                            объяснения и др.)</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Ознакомление с материалами дела, снятие фотокопий</p>
                        <p class="m-3 services-price-list-item-number">2 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Представительство в суде первой инстанции (за день
                            участия)</p>
                        <p class="m-3 services-price-list-item-number">4 500 ₽</p>
                    </div>
                </div>
                <div class="services-price-list ms-3">
                    <div class="services-price-list-title semi-bold-item main-background p-3">
                        Делопроизводство по товарным знакам
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Первичная консультация</p>
                        <p class="m-3 services-price-list-item-number">1 500 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Полная проверка обозначения на уникальность
                            (проводится среди тождественных и сходных обозначений)
                        </p>
                        <p class="m-3 services-price-list-item-number">От 8 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Подача заявки на регистрацию обозначения без ведения делопроизводства</p>
                        <p class="m-3 services-price-list-item-number">От 11 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Подготовка пакета документов, подача заявки на обозначение, ведение
                            делопроизводства, получение решения о регистрации или об отказе в регистрации, получение и
                            передача свидетельства
                        </p>
                        <p class="m-3 services-price-list-item-number">От 20 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">
                            Ответы на возможные запросы от регулирующего органа, требующие экспертной работы,
                            подготовка возражений по противопоставлениям
                        </p>
                        <p class="m-3 services-price-list-item-number">От 5 000 ₽</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Доработка дизайна до уникальности для устранения препятствий при регистрации
                            обозначения</p>
                        <p class="m-3 services-price-list-item-number">По запросу</p>
                    </div>
                    <div class="services-price-list-item d-flex align-items-center justify-content-between">
                        <p class="m-3">Регистрация договора лицензии отчуждения на одно обозначение</p>
                        <p class="m-3 services-price-list-item-number">От 15 000 ₽</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-cards">
        <h2 class="bold-item heading">Услуги</h2>
        <div class="services-switcher my-5">
            <button class="semi-bold-item services-switcher-button pe-5 active position-relative">Для частных
                лиц
            </button>
            <button class="semi-bold-item services-switcher-button">Для бизнеса</button>
        </div>
        <div class="services row gy-3">
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4 active">Банкротство</p>
                </div>
            </div>
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4">Банкротство</p>
                </div>
            </div>
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4">Банкротство</p>
                </div>
            </div>
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4">Банкротство</p>
                </div>
            </div>
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4">Банкротство</p>
                </div>
            </div>
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4">Банкротство</p>
                </div>
            </div>
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4">Банкротство</p>
                </div>
            </div>
            <div class="col-4 services-item-container">
                <div class="services-item d-flex align-items-center p-4 me-1">
                    <img src="<?= Yii::getAlias('@web/images/Vector.png') ?>" alt="">
                    <p class="services-paragraph m-0 ps-4">Банкротство</p>
                </div>
            </div>
        </div>
    </section>
</div>