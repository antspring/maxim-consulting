<?php
/** @var yii\web\View $this */

/** @var app\Models\News $articles
 * @var app\Models\News $news
 * @var app\Models\News $lawyers
 * @var app\Models\News $cases
 * @var yii\data\Pagination $pages
 */

use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Блог | Maxim Консалтинг';
?>
<div class="main-container">
    <section class="blog-container">
        <div class="main-heading">
            <div class="heading-container">
                <h1 class="heading header-xl-700">
                    Блог
                </h1>
                <div class="blog-switcher d-flex justify-content-between d-none d-sm-block">
                    <button id="1" class="blog-switcher-button active position-relative p-0 body-xl-600">Все материалы
                    </button>
                    <button id="2" class="blog-switcher-button position-relative p-0 body-xl-400">Новости</button>
                    <button id="3" class="blog-switcher-button position-relative p-0 body-xl-400">Спроси юриста
                    </button>
                    <button id="4" class="blog-switcher-button position-relative p-0 body-xl-400">Наши кейсы</button>
                </div>
            </div>
        </div>
        <div id="1" class="blog-content">
            <?php
            foreach ($articles as $article) { ?>
                <div class="blog-content-item">
                    <div class="d-flex justify-content-between">
                        <a class="link body-s-400" href="#"><?= $article->categoryText ?></a>
                        <p class="m-0 main-blog-item-date body-s-400"><?= Yii::$app->formatter->asDate(
                                $article->created_at
                            ) ?></p>
                    </div>
                    <a class="link" href="<?= Url::toRoute('/site/blog-article?id=' . $article->id) ?>">
                        <p class="blog-content-item-title mt-3 header-m-600">
                            <?= $article->title ?>
                        </p>
                    </a>
                    <div class="blog-content-item-text mb-4 body-m-400">
                        <?= StringHelper::truncate($article->text, 450, '...') ?>
                    </div>
                    <img class="blog-image" src="<?= Yii::getAlias('@web/' . $article->image) ?>" alt="">
                </div>
                <?php
            } ?>
        </div>
        <div id="2" class="blog-content d-none">
            <?php
            foreach ($news as $new) { ?>
                <div class="blog-content-item">
                    <div class="d-flex justify-content-between">
                        <a class="link body-s-400" href="#"><?= $new->categoryText ?></a>
                        <p class="m-0 main-blog-item-date body-s-400"><?= Yii::$app->formatter->asDate(
                                $new->created_at
                            ) ?></p>
                    </div>
                    <a class="link" href="<?= Url::toRoute('/site/blog-article?id=' . $new->id) ?>">
                        <p class="blog-content-item-title mt-3 header-m-600">
                            <?= $new->title ?>
                        </p>
                    </a>
                    <div class="blog-content-item-text mb-4 body-m-400">
                        <?= StringHelper::truncate($new->text, 450, '...') ?>
                    </div>
                    <img class="blog-image" src="<?= Yii::getAlias('@web/' . $new->image) ?>" alt="">
                </div>
                <?php
            } ?>
        </div>
        <div id="3" class="blog-content d-none">
            <?php
            foreach ($lawyers as $lawyer) { ?>
                <div class="blog-content-item">
                    <div class="d-flex justify-content-between">
                        <a class="link body-s-400" href="#"><?= $lawyer->categoryText ?></a>
                        <p class="m-0 main-blog-item-date body-s-400"><?= Yii::$app->formatter->asDate(
                                $lawyer->created_at
                            ) ?></p>
                    </div>
                    <a class="link" href="<?= Url::toRoute('/site/blog-article?id=' . $lawyer->id) ?>">
                        <p class="blog-content-item-title mt-3 header-m-600">
                            <?= $lawyer->title ?>
                        </p>
                    </a>
                    <div class="blog-content-item-text mb-4 body-m-400">
                        <?= StringHelper::truncate($lawyer->text, 450, '...') ?>
                    </div>
                    <img class="blog-image" src="<?= Yii::getAlias('@web/' . $lawyer->image) ?>" alt="">
                </div>
                <?php
            } ?>
        </div>
        <div id="4" class="blog-content d-none">
            <?php
            foreach ($cases as $case) { ?>
                <div class="blog-content-item">
                    <div class="d-flex justify-content-between">
                        <a class="link body-s-400" href="#"><?= $case->categoryText ?></a>
                        <p class="m-0 main-blog-item-date body-s-400"><?= Yii::$app->formatter->asDate(
                                $case->created_at
                            ) ?></p>
                    </div>
                    <a class="link" href="<?= Url::toRoute('/site/blog-article?id=' . $case->id) ?>">
                        <p class="blog-content-item-title mt-3 header-m-600">
                            <?= $case->title ?>
                        </p>
                    </a>
                    <div class="blog-content-item-text mb-4 body-m-400">
                        <?= StringHelper::truncate($case->text, 450, '...') ?>
                    </div>
                    <img class="blog-image" src="<?= Yii::getAlias('@web/' . $case->image) ?>" alt="">
                </div>
                <?php
            } ?>
        </div>
        <div class="blog-pagination d-flex body-l-400">
            <?php
            echo LinkPager::widget([
                'pagination' => $pages,
            ]); ?>
            <!--            <a class="link" href="#">Назад</a>-->
            <!--            <div class="d-flex blog-pagination-number-container">-->
            <!--                <a class="link m-0" href="#">-->
            <!--                    <p class="blog-pagination-number me-3 current-pagination-number">1</p>-->
            <!--                </a>-->
            <!--                <a class="link m-0" href="#">-->
            <!--                    <p class="blog-pagination-number me-3">2</p>-->
            <!--                </a>-->
            <!--                <a class="link m-0" href="#">-->
            <!--                    <p class="blog-pagination-number me-3">3</p>-->
            <!--                </a>-->
            <!--                <a class="link m-0" href="#">-->
            <!--                    <p class="blog-pagination-number me-3">4</p>-->
            <!--                </a>-->
            <!--                <a class="link m-0" href="#">-->
            <!--                    <p class="blog-pagination-number">5</p>-->
            <!--                </a>-->
            <!--            </div>-->
            <!--            <a class="link active" href="#">Дальше</a>-->
        </div>
    </section>
    <section class="services-cards">
        <?= $this->render('_services') ?>
    </section>
</div>

<script>
    let buttons_blog = document.querySelectorAll('.blog-switcher-button'),
        blocks_blog = document.querySelectorAll('.blog-content');
    buttons_blog.forEach(button => {
        button.onclick = function (event) {
            buttons_blog.forEach(item => {
                item.classList.remove('active');
            })
            event.target.classList.add('active');
            blocks_blog.forEach(block_blog => {
                block_blog.classList.add('d-none')
                if (event.target.id === block_blog.id) {
                    block_blog.classList.remove('d-none');
                }
            })
        }
    });
</script>

<script src="<?= Yii::getAlias('@web/js/change-button.js') ?>"></script>