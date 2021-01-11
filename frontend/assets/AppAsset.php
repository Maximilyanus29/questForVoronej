<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'Черные ресницы Enigma, Shine, Barbara_files/css',
        'Черные ресницы Enigma, Shine, Barbara_files/7fd7ebd98fc9f4f7a97703cca96afcfd.css',
    ];
    public $js = [
        'js/common.js',
        'Черные ресницы Enigma, Shine, Barbara_files/b6a1b403e78c893ca07c184ebd9b9fb8.js.Без названия',
//        '/js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
