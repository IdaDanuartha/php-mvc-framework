<?php

/**
 * User: DanDev14
*/
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;
use app\controllers\ContactController;
use app\controllers\HomeController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);

$app->router->get('/contact', [ContactController::class, 'index']);
$app->router->post('/contact', [ContactController::class, 'handleContact']);

$app->run();
