<?php
//定义与框架目录有关的常量
define('INDEX_PATH',__DIR__);
define('STORAGE_PATH', INDEX_PATH . '/storage');
define('RESOURCE_PATH',INDEX_PATH . '/resource');
define('APP_PATH',INDEX_PATH . '/app');

//引入composer
include(__DIR__ . '/vendor/autoload.php');

//启动框架
$app = new \App\Core\App();
$app->start();