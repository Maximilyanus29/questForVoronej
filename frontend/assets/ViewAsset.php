<?php


namespace frontend\assets;
use yii\web\AssetBundle;


class ViewAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'Черные ресницы Enigma, Shine, Barbara_files/css',
//        'Черные ресницы Enigma, Shine, Barbara_files/7fd7ebd98fc9f4f7a97703cca96afcfd.css',
    ];
    public $js = [
//        'js/common.js',
//        '/js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}



