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
    //插入头部
    public $publishOptions = [
        'only' => [
            'conditionizr/dist/conditionizr.js',
        ]
    ];
    public $js = [
        'conditionizr/dist/conditionizr.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];


}
