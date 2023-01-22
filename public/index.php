<?php

/**
 * User: DanDev14
*/
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;
use app\controllers\HomeController;
use app\controllers\auth\LoginController;
use app\controllers\auth\RegisterController;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [HomeController::class, 'index']);

$app->router->get('/login', [LoginController::class, 'index']);
$app->router->get('/register', [RegisterController::class, 'index']);

$app->run();
