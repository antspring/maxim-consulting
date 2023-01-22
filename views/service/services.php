<?php
/** @var yii\web\View $this */

/** @var app\models\Services $categories */

$this->title = 'Услуги | Maxim Консалтинг';
$this->registerMetaTag(['name' => 'title', 'content' => 'Услуги']);
?>

<section class="services-container">
    <div class="main-container">
        <div class="main-heading">
            <div class="heading-container">
                <h1 class="heading header-xl-700">Услуги</h1>
            </div>
        </div>
        <?php
        foreach ($categories as $category) { ?>
            <h2 class="heading header-l-700"><?php
                if (isset($category[0])) echo $category[0]->categoryText ?></h2>
            <div class="row services-list mt-3">
                <?php
                foreach ($category as $service) { ?>
                    <div class="services-list-container col-xxl-4 col-sm-6 col-xs-12">
                        <div class="services-list-item d-flex flex-column justify-content-between">
                            <div>
                                <?= $service->icon ?>
                                <p class="services-list-item-name m-0 mt-3 body-m-600"><?= $service->title ?></p>
                                <p class="services-list-item-text mt-3 body-s-400"><?= $service->subheading ?></p>
                            </div>
                            <a class="link services-list-item-link body-s-600"
                               href="<?= \yii\helpers\Url::toRoute('site/service?id=' . $service->id) ?>">Читать
                                подробнее</a>
                        </div>
                    </div>
                    <?php
                } ?>
            </div>
            <?php
        } ?>
    </div>
</section>
