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
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'loginasset/plugins/fontawesome-free/css/all.min.css',
        'https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css',
        'loginasset/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
        'loginasset/dist/css/adminlte.min.css',
        'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700'
    ];
    public $js = [
        'loginasset/plugins/jquery/jquery.min.js',
        'loginasset/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'loginasset/dist/js/adminlte.min.js',
    ];
    public $depends = [
    ];
}
