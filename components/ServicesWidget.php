<?php

namespace app\components;

use app\models\Services;

class ServicesWidget extends \yii\base\Widget
{

    public function run()
    {
        $query = Services::find();

        $categories[Services::FOR_INDIVIDUALS] = $query->where(['category' => Services::FOR_INDIVIDUALS])->all();

        $categories[Services::FOR_LEGAL_ENTITIES] = $query->where(['category' => Services::FOR_LEGAL_ENTITIES])->all();

        return $this->render('_services', [
            'categories' => $categories
        ]);
    }
}