<?php

namespace app\controllers;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     *
     * @return Response|string
     */
    public function actionServices()
    {
        return $this->render('services');
    }

    /**
     *
     * @return Response|string
     */
    public function actionService(int $id)
    {
        return $this->render('service');
    }

    /**
     *
     * @return Response|string
     */
    public function actionPrice()
    {
        return $this->render('price');
    }

    /**
     *
     * @return Response|string
     */

    public function actionBlog()
    {
        return $this->render('blog');
    }

    /**
     *
     * @return Response|string
     */

    public function actionBlogArticle(int $id)
    {
        return $this->render('blog-article');
    }
}
