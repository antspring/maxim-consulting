<?php

namespace app\components\services;

use Yii;
use yii\db\ActiveRecord;

class FormService
{
    public function saveForm(ActiveRecord $model, $data)
    {
        $model->load($data);

        $model->save();

        Yii::$app->mailer->compose()->setFrom($model->email)->setTo(
            'consult@maxim.company'
        )->setSubject($model->name)->setTextBody($model->question)->send();

        Yii::$app->session->setFlash('send_form', 'true');
    }
}