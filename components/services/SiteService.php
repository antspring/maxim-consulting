<?php

namespace app\components\services;

use app\models\News;
use app\models\Prices;
use app\models\Services;
use yii\data\Pagination;

class SiteService
{
    public function getFourLastBlogs()
    {
        return News::find()->orderBy(['id' => SORT_DESC])->limit(4)->all();
    }

    public function getPrices()
    {
        $query = Prices::find();

        for ($i = 1; $i <= count(Prices::getCategories()); $i++) {
            for ($j = 1; $j < count(Prices::getCategoriesPrice()); $j++) {
                $categories[$i][$j] = $query->where(['category' => $i])->andWhere(['category_price_id' => $j])->all();
            }
        }

        return $categories;
    }

    public function getBlogs()
    {
        $articles = News::find();
        $pages = new Pagination(['totalCount' => $articles->count(), 'pageSize' => 4]);
        $articles = $articles->offset($pages->offset)->limit($pages->limit)->all();

        return ['articles' => $articles, 'pages' => $pages];
    }

    public function getBlogRubric(int $id)
    {
        if ($id !== 0) {
            $articles = News::find()->where(['category_id' => $id]);
        } else {
            $articles = News::find();
        }

        $pages = new Pagination(['totalCount' => $articles->count(), 'pageSize' => 4]);
        $articles = $articles->offset($pages->offset)->limit($pages->limit)->all();

        return ['articles' => $articles, 'pages' => $pages];
    }

    public function getBlogArticles(int $id)
    {
        return News::find()->where(['id' => $id])->one();
    }

    public function getServices()
    {
        $query = Services::find();
        $categories[Services::FOR_INDIVIDUALS] = $query->where(['category' => Services::FOR_INDIVIDUALS])->all();
        $categories[Services::FOR_LEGAL_ENTITIES] = $query->where(['category' => Services::FOR_LEGAL_ENTITIES])->all();
        return $categories;
    }

    public function getService(int $id)
    {
        return Services::find()->where(['id' => $id])->one();
    }
}