<?php
require_once '../vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/', function () {});

$app->run();