<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class LibAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
    public $cssOptions = ['position' => \yii\web\View::POS_HEAD];
    //插入头部
    public $publishOptions = [
        'only' => [
            'jquery/dist/jquery.js',
            'conditionizr/dist/conditionizr.js',
            'bootstrap/dist/css/bootstrap.css',
            'bootstrap/dist/js/bootstrap.js',
            'bootstrap/dist/fonts/glyphicons-halflings-regular.eot',
            'bootstrap/dist/fonts/glyphicons-halflings-regular.svg',
            'bootstrap/dist/fonts/glyphicons-halflings-regular.ttf',
            'bootstrap/dist/fonts/glyphicons-halflings-regular.woff',
            'bootstrap/dist/fonts/glyphicons-halflings-regular.woff2',
        ]
    ];
    public $js = [
        'jquery/dist/jquery.js',
        'conditionizr/dist/conditionizr.js',
        'bootstrap/dist/js/bootstrap.js',
    ];
    public $css = [
        'bootstrap/dist/css/bootstrap.css',
    ];
}
