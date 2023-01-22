<?php

namespace app\controllers;

use app\components\services\SiteService;
use yii\web\Response;

class ServiceController extends \yii\web\Controller
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
        return $this->render('services', [
            'categories' => $this->service->getServices()
        ]);
    }

    /**
     *
     * @return Response|string
     */
    public function actionGetService(int $id)
    {
        return $this->render('service', [
            'service' => $this->service->getService($id)
        ]);
    }
}