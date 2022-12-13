<?php

namespace app\controllers;

use app\models\FeedbackForm;
use Yii;

class FormController extends \yii\web\Controller
{
    private $formService;

    public function __construct($id, $module, $config = [])
    {
        $this->formService = Yii::$container->get('app\components\services\FormService');

        parent::__construct($id, $module, $config);
    }

    public function actionFeedback()
    {
        $this->formService->saveForm(new FeedbackForm(), Yii::$app->request->post());
        $this->goBack();
    }
}