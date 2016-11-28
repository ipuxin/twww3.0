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
     
		'css/bootstrap.css',
		'css/animate.css',
		'css/style.css',
		'css/shop.css',
		'css/bootstrap-datetimepicker.css',
        'css/styleV2.css',
    ];
    public $js = [
//	'js/jquery-3.1.0.min.js',
//		'jquery-1.11.1.min.js',
		'js/bootstrap.js',
'js/mytools.js'


   

    ];
    public $depends = [
        'yii\web\YiiAsset',
  'yii\bootstrap\BootstrapAsset',

    ];
}

