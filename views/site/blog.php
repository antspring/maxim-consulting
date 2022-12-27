<?php
/** @var yii\web\View $this */

/** @var app\Models\News $articles
 * @var app\Models\News $news
 * @var app\Models\News $lawyers
 * @var app\Models\News $cases
 * @var yii\data\Pagination $pages
 */

use app\components\ServicesWidget;
use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Блог | Maxim Консалтинг';
$this->registerMetaTag(['name' => 'title', 'content' => 'Блог']);
?>
<div class="main-container">
    <section class="blog-container">
        <div class="main-heading">
            <div class="heading-container">
                <h1 class="heading header-xl-700">
                    Блог
                </h1>
                <div class="blog-switcher d-flex justify-content-between d-none d-sm-block">
                    <button id="0" class="blog-switcher-button active position-relative p-0 body-xl-600">Все материалы
                    </button>
                    <button id="1" class="blog-switcher-button position-relative p-0 body-xl-400">Новости</button>
                    <button id="2" class="blog-switcher-button position-relative p-0 body-xl-400">Спроси юриста
                    </button>
                    <button id="3" class="blog-switcher-button position-relative p-0 body-xl-400">Наши кейсы</button>
                </div>
            </div>
        </div>
        <div class="blog-container-fetch">
            <div id="0" class="blog-content">
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
                <div class="blog-pagination d-flex body-l-400">
                    <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]); ?>
                </div>
            </div>
        </div>
    </section>
    <section class="services-cards">
        <?= ServicesWidget::widget() ?>
    </section>
</div>

<script>
    let buttons_blog = document.querySelectorAll('.blog-switcher-button'),
        blog_container = document.querySelector('.blog-container-fetch');
    buttons_blog.forEach(button => {
        button.onclick = function (event) {
            buttons_blog.forEach(item => {
                item.classList.remove('active');
            })
            event.target.classList.add('active');

            async function getBlogRubric() {
                await fetch('/site/blog-rubric?id=' + event.target.id).then(async (response) => {
                    blog_container.innerHTML = await response.text()
                });
            }

            getBlogRubric();
        }
    });
</script>

<script src="<?= Yii::getAlias('@web/js/change-button.js') ?>"></script>