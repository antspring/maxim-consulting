<?php
/** @var yii\web\View $this */

/** @var app\models\Services $service */

use app\components\ServicesWidget;

$this->title = 'Банкротство физических лиц | Maxim Консалтинг';
$this->registerMetaTag(['name' => 'title', 'content' => $service->title])
?>
<div class="round-container position-relative">
    <section class="service-container">
        <div class="main-heading main-container">
            <div class="heading-container">
                <h1 class="heading header-xl-700"><?= $service->title ?></h1>
                <p class="sub-heading body-xl-400">
                    <?= $service->subheading ?>
                </p>
            </div>
            <img class="position-absolute bottom-0 end-0 half-circle d-none d-lg-block"
                 src="<?= Yii::getAlias('@web/images/half-circle.png') ?>"
                 alt="">
        </div>
    </section>
</div>
<section class="submit-application main-background">
    <div class="main-container">
        <?= $this->render('_send-request') ?>
    </div>
</section>
<div class="main-container">
    <section class="services-questions body-m-400">
        <?= $service->text ?>
        <h2 class="heading header-l-700">Как помогаем</h2>
        <ul class="list-group">
            <li class="list-item position-relative">
                Законно списываем долги по кредитам, штрафам, ЖКХ, налога,
                микрозаймам.
            </li>
            <li class="list-item position-relative">Избавляем от звонков коллекторов и давления кредиторов.</li>
            <li class="list-item position-relative">Сохраняем единственное жиль.</li>
            <li class="list-item position-relative">Снимаем ограничение на выезд из-за долга.</li>
        </ul>
        <h2 class="heading header-l-700">Как работаем</h2>
        <ul class="list-group">
            <li class="list-item position-relative">
                Изучаем ситуацию и предлагаем решение: описываем конкретные шаги,
                возможные сценарии.
            </li>
            <li class="list-item position-relative">Подбираем вариант рассрочки, заключяем договор.</li>
            <li class="list-item position-relative">
                Собираем документы и начинаем работу. Если досудебное
                урегулирование невозможно, вам необязательно приходить на заседания: это делает персональный юрист, он
                расскажет о промежуточных итогах.
            </li>
        </ul>
        <h2 class="heading header-l-700">Кому подойдет процедура банкротства физического лица</h2>
        <p>
            Банкротство - это ситуация, когда вы не можете выплачивать кредиты и долги даже после продажи всего своего
            имущества. Стать банкротом можно через суд и МФЦ. От способа зависят условия, при которых возможно
            банкротство физических лиц.
        </p>
        <h3 class="service-sub-heading subheader-xl-600">Через суд</h3>
        <ul class="list-group">
            <li class="list-item position-relative">
                Общая сумма долга превышает стоимость имущества, за исключением
                единсвенного жилья, если оно не ипотечное.
            </li>
            <li class="list-item position-relative">Просрочка по одному из кредитов больше трех месяцев.</li>
            <li class="list-item position-relative">Просрочены платежи по 10% кредитов.</li>
            <li class="list-item position-relative">Общая сумма долга больше 500 000 ₽.</li>
        </ul>
        <p class="mt-3">
            Процедуру банкротства физических лиц определяет суд. Это может быть реструктуризация задолженности или
            реализация имущества. В первом случае можно получить рассрочку по кредиту до трех лет, при этом ваш
            ежемесячный доход должен составлять от 50 000 до 100 000 ₽. Во втором случае в течение полугода продается
            имущество должника. Реализации не подлежат личные вещи, техника, мебель, единственное жилье. Юрист по
            банкротству физических лиц постарается добиться самого выгодного для вас решения.
        </p>
        <h3 class="service-sub-heading subheader-xl-600">Через МФЦ</h3>
        <p>Закон о банкротстве физических лиц называет это «упрощенной процедурой».</p>
        <ul class="list-group">
            <li class="list-item position-relative">Общая сумма долга — 50 000–500 000 ₽.</li>
            <li class="list-item position-relative">
                Исполнительное производство в отношении должника окончено из-за
                отсутствия средств на счетах и имущества.
            </li>
        </ul>
        <h3 class="service-sub-heading subheader-xl-600">Сколько длится процедура</h3>
        <p>
            Нет какого-то конкретного срока. Все зависит от изначальных данных
            и правильности поданных документов. Чем качественнее проведена работа,
            тем быстрее вас признают банкротом. И наоборот: если обратиться к неопытному юристу, процесс может
            затянуться на годы. Поэтому стоит с осторожностью относиться к объявлениям с заголовками вроде «Бесплатное
            банкротство физических лиц» — возможно, начинающий специалист просто набивает руку.
        </p>
        <h3 class="service-sub-heading subheader-xl-600">Какие будут последствия</h3>
        <p>После окончания банкротства: </p>
        <ul class="list-group">
            <li class="list-item position-relative">
                в течение трех лет нельзя быть директором или работать в органах
                управления юрлица;
            </li>
            <li class="list-item position-relative">
                в течение пяти лет запрещено работать в органах управления страховой
                организации, негосударственного пенсионного фонда, управляющей компании инвестиционного фонда, паевого
                инвестиционного фонда и негосударственного пенсионного фонда или микрофинансовой компании, иным образом
                участвовать в их управлении. Также вы обязаны сообщить о своем статусе, если берете новый кредит. Но это
                вовсе не означает, что сумму не одобрят: окончательное решение за банком;
            </li>
            <li class="list-item position-relative">
                в течение десяти лет нельзя занимать должности в органах управления
                кредитной организации.
            </li>
        </ul>
        <h3 class="service-sub-heading subheader-xl-600">Стоимость банкротства физического лица</h3>
        <p>
            Цена услуги «Банкротство физических лиц» зависит от сложности дела, суммы долга и способа списания — через
            МФЦ или суд. Оставьте заявку в форме ниже,
            мы подсчитаем точную сумму и предложим подходящие варианты рассрочки.
        </p>
    </section>
    <section class="services-cards">
        <?= ServicesWidget::widget() ?>
    </section>
</div>