<?php

namespace app\components;

class ConsultationFeedbackFormWidget extends \yii\base\Widget
{
    public function run()
    {
        $model = new \app\models\FeedbackForm();

        return $this->render('_form', ['model' => $model]);
    }
}