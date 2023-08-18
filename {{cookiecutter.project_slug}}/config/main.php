<?php
return [
    'aliases' => [
        '@{{ cookiecutter.project_namespace }}' => APP_HOME . '/src/'
    ],
    'bootstrap' => ['log'],
    'basePath' => APP_HOME . '/src/',
    'runtimePath' => APP_HOME . '/run/',
    'vendorPath' => APP_HOME . '/vendor/',
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning']
                ]
            ]
        ]
    ]
];
