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
        $model = $this->formService->saveForm(new FeedbackForm(), Yii::$app->request->post());
        Yii::$app->mailer->compose()->setFrom($model->email)->setTo(
            'myemail@yourserver.com'
        )->setSubject($model->name)->setTextBody($model->question)->send();

        Yii::$app->session->set('send_form', 'true');

        return $this->goBack(Yii::$app->request->referrer);
    }
}