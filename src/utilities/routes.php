<?php

$router->register('', __DIR__ . '/../controllers/index.controller.php');
$router->register('albums', __DIR__ . '/../controllers/albums/index.controller.php');
$router->register('album', __DIR__ . '/../controllers/albums/id.controller.php');
$router->register('trading', __DIR__ . '/../controllers/trading.controller.php');
$router->register('mastered', __DIR__ . '/../controllers/mastered.controller.php');
$router->register('logs', __DIR__ . '/../controllers/logs.controller.php');
$router->register('404', __DIR__ . '/../controllers/404.controller.php');