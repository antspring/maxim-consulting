<?php

namespace app\components;

class ServicesWidget extends \yii\base\Widget
{
    public function run()
    {
        return $this->render('_services');
    }
}