<?php

$router->register('', Loader::basePath('src/controllers/index.controller.php'));
$router->register('albums', Loader::basePath('src/controllers/albums/index.controller.php'));
$router->register('album', Loader::basePath('src/controllers/albums/id.controller.php'));
$router->register('trading', Loader::basePath('src/controllers/trading.controller.php'));
$router->register('mastered', Loader::basePath('src/controllers/mastered.controller.php'));
$router->register('logs', Loader::basePath('src/controllers/logs.controller.php'));
$router->register('404', Loader::basePath('src/controllers/404.controller.php'));