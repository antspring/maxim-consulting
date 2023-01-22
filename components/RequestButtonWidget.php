<?php

namespace app\components;

use yii\helpers\ArrayHelper;

class RequestButtonWidget extends \yii\base\Widget
{
    public $route;
    private $allowedRoutes = [
        'service',
        'blog',
        'blog/article',
        'site/privacy-policy'
    ];
    private $button;

    public function init()
    {
        parent::init();

        $this->button = ArrayHelper::isIn($this->route, $this->allowedRoutes);
    }

    public function run()
    {
        if ($this->button) {
            return $this->render('_btn-request-primary');
        } else {
            return $this->render('_btn-request-secondary');
        }
    }
}