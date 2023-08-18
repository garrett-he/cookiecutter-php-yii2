<?php
return array_replace_recursive(
    require(APP_HOME . '/config/main.php'),
    [
        'id' => '{{ cookiecutter.project_slug }}-console',
        'basePath' => APP_HOME . '/src/',
        'controllerNamespace' => '{{ cookiecutter.project_namespace }}\commands'
    ]
);
