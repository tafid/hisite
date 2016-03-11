<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'HiSite',
    'basePath' => dirname(__DIR__),
    'name' => 'AHnames',
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '6WbP9JyuVvFfMaTSXTLVxRgQX20WvS7B',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),

        'assetManager' => [
            'bundles' => false,
        ],

        'view' => [
            'theme' => [
                'basePath' => '@app/themes/dataserv',
                'baseUrl' => '@web/themes/dataserv',
                'pathMap' => [
                    '@app/views' => '@app/themes/dataserv',
                ],
            ],
        ],

        'urlManager' => [
            'class' => 'codemix\localeurls\UrlManager',
            'languages' => ['en', 'ru'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'ignoreLanguageUrlPatterns' => [
//                '#^site/(login|register)#' => '#^(login|register)#',
//                '#^api/#' => '#^api/#',
//                '' => 'site/index',
//                'login' => 'site/login',
//                'contacts' => 'site/contact',

            ],
            'rules' => [

            ],
        ],

        'hiresource' => [
            'class'  => 'hipanel\base\Connection',
//            'auth'   => function () {
//                if (Yii::$app->user->identity) {
//                    return ['access_token' => Yii::$app->user->identity->getAccessToken()];
//                }
//
//                if (Yii::$app->user->loginRequired() !== null) {
//                    Yii::trace('Login is required. Redirecting to the login page', 'hipanel');
//                    Yii::$app->response->send();
//                    Yii::$app->end();
//                }
//
//                return [];
//            },
            'config' => [
                'api_url'  => $params['api_url'],
                'base_uri' => $params['api_url'],
            ],
        ],

        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],

    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'panels' => [
            'hiresource' => [
                'class' => 'hiqdev\hiart\DebugPanel',
            ],
        ],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
