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
        {% if cookiecutter.with_db != 'no' %}
        'db' => require(__DIR__ . '/db.php'),
        {% endif %}
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
