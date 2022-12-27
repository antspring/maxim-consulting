<?php
/**
 * @var app\models\Services $categories
 */

?>
<div class="adaptive-white-background services-main-container">
    <h2 class="heading header-l-700">Услуги</h2>
    <div class="services-switcher my-4 my-sm-5 d-flex">
        <button id="1"
                class="d-flex services-switchers services-switcher-button pe-4 pe-sm-5 active position-relative header-m-600">
            Для частных
            лиц
        </button>
        <button id="2" class="d-flex services-switchers services-switcher-button header-m-600">Для бизнеса</button>
    </div>
    <?php
    foreach ($categories as $key => $category) { ?>
        <div id="<?= $key ?>" class="services row gy-3 <?php
        if ($key !== 1) echo 'd-none' ?>">
            <?php
            foreach ($category as $service) { ?>
                <div class="col-xl-4 col-sm-6 col-xs-12 services-item-container">
                    <a class="link" href="<?= \yii\helpers\Url::toRoute('/site/service?id=' . $service->id) ?>">
                        <div class="services-item d-flex align-items-center me-xl-1 me-lg-5 me-md-3">
                            <?= $service->icon ?>
                            <p class="services-paragraph m-0 ps-4 active body-m-400"><?= $service->title ?></p>
                        </div>
                    </a>
                </div>
                <?php
            } ?>
        </div>
        <?php
    } ?>
</div>

<script>
    let buttons = document.querySelectorAll('.services-switchers'),
        services = document.querySelectorAll('.services');
    buttons.forEach(button => {
        button.onclick = function (event) {
            buttons.forEach(item => {
                item.classList.remove('active');
            })
            event.target.classList.add('active');
            services.forEach(service => {
                service.classList.add('d-none')
                if (event.target.id === service.id) {
                    service.classList.remove('d-none');
                }
            })
        }
    });
</script>