<?php

$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config = [
    'id' => 'HiSite',
    'basePath' => dirname(__DIR__),
    'name' => 'AHnames',
    'bootstrap' => ['log'],
    'language' => 'en',
    'sourceLanguage' => 'en',
    'aliases' => [
        '@bill'   => '/finance/bill',
        '@purse'  => '/finance/purse',
        '@tariff' => '/finance/tariff',
        '@pay'    => '/merchant/pay',
        '@cart'   => '/cart/cart',
    ],
    'modules' => [
        'domainchecker' => [
            'class' => 'hipanel\modules\domainchecker\Module',
            'viewPath' => '@app/themes/dataserv/modules'
        ],
        'finance' => [
            'class' => 'hipanel\modules\finance\Module',
        ],
        'cart' => [
            'class'  => 'hiqdev\yii2\cart\Module',
            'viewPath' => '@app/themes/dataserv/modules',
            'termsPage'      => Yii::$app->params['orgUrl'] . 'rules',
            'orderPage'      => '/finance/cart/select',
            /*'orderButton'    => function ($module) {
                return Yii::$app->getView()->render('@hipanel/modules/finance/views/cart/order-button', [
                    'module' => $module,
                ]);
            },*/
            'paymentMethods' => function () {
                return Yii::$app->getView()->render('@hipanel/modules/finance/views/cart/payment-methods', [
                    'merchants' => Yii::$app->getModule('merchant')->getCollection([])->getItems(),
                ]);
            },
            'shoppingCartOptions' => [
                'on cartChange' => ['hipanel\modules\finance\cart\CartCalculator', 'execute'],
            ],
        ],
        'merchant' => [
            'class'           => 'hiqdev\yii2\merchant\Module',
            'returnPage'      => '/finance/pay/return',
            'notifyPage'      => '/finance/pay/notify',
            'finishPage'      => '/finance/bill',
            'depositClass'    => 'hipanel\modules\finance\merchant\Deposit',
            'collectionClass' => 'hipanel\modules\finance\merchant\Collection',
        ],
        'news' => [
            'class'  => 'hisite\modules\news\Module',
            'viewPath' => '@app/themes/dataserv/modules'
        ]
    ],
    'components' => [
        'formatter' => [
            'sizeFormatBase' => 1000,
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '6WbP9JyuVvFfMaTSXTLVxRgQX20WvS7B',
        ],
        'cache' => [
            'class' => 'hipanel\base\Cache',
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
            'enableDefaultLanguageUrlCode' => false,
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

        'hiart' => [
            'class' => 'hipanel\base\Connection',
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
                'api_url' => $params['api_url'],
                'base_uri' => $params['api_url'],
            ],
        ],

        'i18n' => [
            'class' => 'hipanel\base\I18N',
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
                'hisite*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'hisite' => 'hisite.php',
                    ],
                ],
                 'hipanel/dns' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'hipanel/dns' => 'dns.php',
                    ],
                ],
                'hipanel/domain' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'forceTranslation' => true,
                    'basePath' => '@hipanel/modules/domain/messages',
                    'fileMap' => [
                        'hipanel/domain' => 'domain.php',
                    ],
                ],
                'hipanel/server*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@hipanel/modules/server/messages',
                    'fileMap' => [
                        'hipanel/server' => 'server.php',
                        'hipanel/server/os' => 'os.php',
                        'hipanel/server/panel' => 'panel.php',
                        'hipanel/server/rrd' => 'rrd.php',
                    ],
                ],
                'hipanel/finance' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@hipanel/modules/finance/messages',
                    'fileMap' => [
                        'hipanel/finance' => 'finance.php',
                    ],
                ],
                'cart' => [
                    'class'          => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath'       => '@hiqdev/yii2/cart/messages',
                    'fileMap'        => [
                        'merchant' => 'cart.php',
                    ],
                ]
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
            'hiart' => [
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
