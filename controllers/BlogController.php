<?php

namespace app\controllers;

use app\components\services\SiteService;
use yii\web\Response;

class BlogController extends \yii\web\Controller
{
    public $service;

    public function __construct($id, $module, SiteService $service, $config = [])
    {
        $this->service = $service;
        parent::__construct($id, $module, $config);
    }

    /**
     *
     * @return Response|string
     */

    public function actionIndex()
    {
        $data = $this->service->getBlogs();

        return $this->render('blog', $data);
    }

    /**
     *
     * @return Response|string
     */
    public function actionRubric(int $id)
    {
        $data = $this->service->getBlogRubric($id);

        return $this->renderAjax('_blog-rubric', $data);
    }

    /**
     *
     * @return Response|string
     */

    public function actionArticle(int $id)
    {
        return $this->render(
            'blog-article',
            [
                'article' => $this->service->getBlogArticles($id),
                'blogs' => $this->service->getFourLastBlogs()
            ]
        );
    }
}