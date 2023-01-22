<?php

namespace app\assets;

class ContactsAsset extends \yii\web\AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        'js/get-contacts.js'
    ];
}