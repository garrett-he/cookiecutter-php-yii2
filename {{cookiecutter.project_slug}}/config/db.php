<?php
return [
    'class' => 'yii\db\Connection',
    {% if cookiecutter.with_db == 'mysql' %}
    'dsn' => 'mysql:host=' . getenv('APP_DB_HOST') . ';dbname=' . getenv('APP_DB_NAME'),
    'username' => getenv('APP_DB_USER'),
    'password' => getenv('APP_DB_PASSWORD'),
    {% elif cookiecutter.with_db == 'pgsql' %}
    'dsn' => 'pgsql:host=' . getenv('APP_DB_HOST') . ';dbname=' . getenv('APP_DB_NAME'),
    'username' => getenv('APP_DB_USER'),
    'password' => getenv('APP_DB_PASSWORD'),
    {% elif cookiecutter.with_db == 'sqlite' %}
    'dsn' => 'sqlite:' . getenv('APP_DB_PATH'),
    {% endif %}
    'charset' => 'utf8'
];
