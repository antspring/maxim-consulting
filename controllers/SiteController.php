<?php

namespace app\controllers;

use app\components\services\SiteService;
use app\models\Contacts;
use Yii;
use yii\web\Controller;
use yii\web\Response;

class SiteController extends Controller
{
    public $siteService;

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
        return $this->render('index', [
            'news' => $this->siteService->getFourLastBlogs()
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

    public function actionGetContacts(int $id)
    {
        return $this->asJson(Contacts::findOne($id));
    }

    /**
     *
     * @return Response|string
     */
    public function actionPrivacyPolicy()
    {
        return $this->render('privacy-policy');
    }
}
