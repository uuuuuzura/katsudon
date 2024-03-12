<?php

require __DIR__ . '/../src/utilities/router.php';

$router = new Router;

$router->register('', __DIR__ . '/../src/controllers/index.controller.php');
$router->register('albums', __DIR__ . '/../src/controllers/albums.controller.php');
$router->register('trading', __DIR__ . '/../src/controllers/trading.controller.php');
$router->register('mastered', __DIR__ . '/../src/controllers/mastered.controller.php');
$router->register('logs', __DIR__ . '/../src/controllers/logs.controller.php');

require $router->direct(trim($_SERVER['REQUEST_URI'], '/'));