<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'language' => 'zh-CN',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],

        /**
         * 美化url
         */
        "urlManager" => [
            //用于表明 urlManager 是否启用URL美化功能
            "enablePrettyUrl" => true,
            // 是否在URL中显示入口脚本
            "showScriptName" => false,
            'rules' => [
                '' => 'site/index',
                'info' => 'info/index',
                'partner' => 'partner/index',
                'ruzhu' => 'page/ruzhu',
                'gywm' => 'page/gywm',
                //                'lxwm'=>'book/lxwm',
                'lxwm' => 'page/lxwm',
                //      'zs'=>'page/zs',
                'business' => 'page/zs',
                'mobile' => 'page/zs',
                'main' => 'page/zs',
                'app' => 'page/app',
                //add   2016年9月27日16:00:55
                'shop.html' => 'page/shop',
                'lc.html' => 'page/lc',
                'pro.html' => 'page/pro',
                'busguide.html' => 'page/busguide',
                'ruzhu.html' => 'page/ruzhu',
                'person' => 'person/create',
                'createshop' => 'person/createshop',
                'wait' => 'person/wait',
                'cwait' => 'seller/wait',
                'company' => 'seller/company',
                'companyshop' => 'seller/companyshop',


                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',


            ],
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
