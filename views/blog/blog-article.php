<?php
/** @var yii\web\View $this */

/** @var app\Models\News $article */
/** @var app\Models\News $blogs */

$this->title = 'Юрист по ДТП: законны ли штрафы за «среднюю скорость»?';
$this->registerMetaTag(['name' => 'title', 'content' => $article->title]);
?>

<div class="main-container">
    <section class="blog-container blog-article body-m-400">
        <div class="main-heading">
            <div class="d-flex justify-content-between">
                <a class="link body-s-400" href="#"><?= $article->categoryText ?></a>
                <p class="m-0 main-blog-item-date body-s-400"><?= Yii::$app->formatter->asDate(
                        $article->created_at
                    ) ?></p>
            </div>
            <div class="heading-container">
                <h1 class="heading header-l-700">
                    <?= $article->title ?>
                </h1>
            </div>
        </div>
        <img class="mb-4 blog-container-image" src="<?= Yii::getAlias('@web/' . $article->image) ?>" alt="">
        <?= $article->text ?>
    </section>
</div>
<section class="submit-application main-background">
    <div class="main-container">
        <?= $this->render('_send-request') ?>
    </div>
</section>
<section class="main-blog">
    <div class="main-container">
        <h2 class="heading header-l-700">Блог</h2>
        <div class="main-blog-item-list row">
            <?php
            foreach ($blogs as $blog) { ?>
                <div class="main-blog-item-container col-12 col-lg-6">
                    <div class="main-blog-item d-flex flex-column flex-md-row me-1">
                        <img class="main-blog-image" src="<?= Yii::getAlias('@web/' . $blog->image) ?>" alt="">
                        <div class="main-blog-item-text">
                            <a class="link"
                               href="<?= \yii\helpers\Url::toRoute(['blog/article', 'id' => $blog->id]) ?>">
                                <p class="body-m-600">
                                    <?= $blog->title ?>
                                </p>
                            </a>
                            <div class="d-flex justify-content-between">
                                <a class="link body-s-400" href="#"><?= $blog->categoryText ?></a>
                                <p class="m-0 main-blog-item-date body-s-400"><?= Yii::$app->formatter->asDate(
                                        $blog->created_at
                                    ) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
        <a class="btn-request btn-request-primary btn-request-primary-outline link body-m-400"
           href="<?= \yii\helpers\Url::toRoute('/blog') ?>">Больше новостей</a>
    </div>
</section>