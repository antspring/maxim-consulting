<?php

namespace app\assets;

class BlogAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/get-blog-rubric.js'
    ];
}