<?php
/**
 * @var app\models\News $articles
 * @var yii\data\Pagination $pages
 */

use yii\helpers\StringHelper;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<div id="<?php
if (isset($articles[0])) {
    echo $articles[0]->category_id;
} ?>" class="blog-content">
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
            'registerLinkTags' => true
        ]); ?>
    </div>
</div>