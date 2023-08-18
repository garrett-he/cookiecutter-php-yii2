<?php
return array_replace_recursive(
    require(APP_HOME . '/config/main.php'),
    [
        'id' => '{{ cookiecutter.project_slug }}-web',
        'basePath' => APP_HOME . '/src/',
        'controllerNamespace' => '{{ cookiecutter.project_namespace }}\controllers',
        'components' => [
            'urlManager' => [
                'enablePrettyUrl' => true,
                'enableStrictParsing' => false,
                'showScriptName' => false
            ]
        ]
    ]);
