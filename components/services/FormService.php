<?php

namespace app\components\services;

use yii\db\ActiveRecord;

class FormService
{
    public function saveForm(ActiveRecord $model, $data)
    {
        $model->load($data);
        $model->save();
    }
}