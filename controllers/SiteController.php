<?php

namespace app\controllers;

use app\models\Contacts;
use app\models\LoginForm;
use app\models\News;
use app\models\Prices;
use Yii;
use yii\data\Pagination;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    public $layout = 'site';

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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $news = News::find()->orderBy(['id' => SORT_DESC])->limit(4)->all();

        return $this->render('general', [
            'news' => $news
        ]);
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
        $query = Prices::find();

        for ($i = 1; $i <= count(Prices::getCategories()); $i++) {
            for ($j = 1; $j < count(Prices::getCategoriesPrice()); $j++) {
                $categories[$i][$j] = $query->where(['category' => $i])->andWhere(['category_price_id' => $j])->all();
            }
        }

        return $this->render('price', [
            'categories' => $categories
        ]);
    }

    /**
     *
     * @return Response|string
     */

    public function actionBlog()
    {
        $articles = News::find();
        $pages = new Pagination(['totalCount' => $articles->count(), 'pageSize' => 4]);
        $articles = $articles->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('blog', [
            'articles' => $articles,
            'pages' => $pages
        ]);
    }

    public function actionBlogRubric(int $id)
    {
        if ($id !== 0) {
            $articles = News::find()->where(['category_id' => $id]);
        } else {
            $articles = News::find();
        }

        $pages = new Pagination(['totalCount' => $articles->count(), 'pageSize' => 4]);
        $articles = $articles->offset($pages->offset)->limit($pages->limit)->all();

        return $this->renderAjax('_blog-rubric', [
            'articles' => $articles,
            'pages' => $pages
        ]);
    }

    /**
     *
     * @return Response|string
     */

    public function actionBlogArticle(int $id)
    {
        $article = News::find($id)->one();

        return $this->render('blog-article', ['article' => $article]);
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
