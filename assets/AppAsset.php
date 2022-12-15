<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/general.css',
        'css/header.css',
        'css/footer.css',
        'css/main.css',
        'css/services.css',
        'css/service.css',
        'css/price.css',
        'css/blog.css',
        'css/blog-article.css',
        'css/about-us.css',
        'css/contacts.css'
    ];
    public $js = [
        'js/header-scroll.js',
        'js/header-links.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
