<?php

use yii\web\Application;
use yii\filters\Cors;

define('APP_HOME', realpath(__DIR__ . '/../'));

defined('YII_DEBUG') or define('YII_DEBUG', getenv('PHP_ENV') === 'dev');
defined('YII_ENV') or define('YII_ENV', YII_DEBUG ? 'dev' : 'prod');

require_once APP_HOME . '/vendor/autoload.php';

$application = new Application(require(APP_HOME . '/config/web.php'));
$application->run();
