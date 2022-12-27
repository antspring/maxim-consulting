<?php

namespace app\controllers;

use app\components\services\SiteService;
use app\models\Contacts;
use app\models\LoginForm;
use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    public $layout = 'site';
    public $siteService;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
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

    public function __construct($id, $module, $config = [])
    {
        $this->siteService = Yii::$container->get(SiteService::class);

        parent::__construct($id, $module, $config);
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('general', [
            'news' => $this->siteService->getFourLastBlogs()
        ]);
    }

    /**
     *
     * @return Response|string
     */
    public function actionServices()
    {
        return $this->render('services', [
            'categories' => $this->siteService->getServices()
        ]);
    }

    /**
     *
     * @return Response|string
     */
    public function actionService(int $id)
    {
        return $this->render('service', [
            'service' => $this->siteService->getService($id)
        ]);
    }

    /**
     *
     * @return Response|string
     */
    public function actionPrice()
    {
        return $this->render('price', [
            'categories' => $this->siteService->getPrices()
        ]);
    }

    /**
     *
     * @return Response|string
     */

    public function actionBlog()
    {
        $data = $this->siteService->getBlogs();

        return $this->render('blog', $data);
    }

    public function actionBlogRubric(int $id)
    {
        $data = $this->siteService->getBlogRubric($id);

        return $this->renderAjax('_blog-rubric', $data);
    }

    /**
     *
     * @return Response|string
     */

    public function actionBlogArticle(int $id)
    {
        return $this->render(
            'blog-article',
            [
                'article' => $this->siteService->getBlogArticles($id),
                'blogs' => $this->siteService->getFourLastBlogs()
            ]
        );
    }

    /**
     *
     * @return Response|string
     */
    public function actionAboutUs()
    {
        return $this->render('about-us');
    }

    /**
     *
     * @return Response|string
     */
    public function actionContacts()
    {
        $this->layout = 'contacts';

        return $this->render('contacts');
    }

    /**
     *
     * @return Response|string
     */
    public function actionPrivacyPolicy()
    {
        return $this->render('privacy-policy');
    }

    public function actionGetContacts(int $id)
    {
        return $this->asJson(Contacts::findOne($id));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        $this->layout = 'main-login';

        if (!Yii::$app->user->isGuest) {
            return $this->redirect('/news');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
