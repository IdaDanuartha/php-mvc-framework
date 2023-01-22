<?php

/**
 * User: DanDev14
*/
require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app->router->get('/', function() {
    return "Hello World";
});

$app->router->get('/about', function() {
    return "About Page";
});

$app->run();
