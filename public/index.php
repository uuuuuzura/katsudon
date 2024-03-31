<?php

// TODO: Remove debugging before pushing to production
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'src/utilities/loader.php';

require Loader::basePath('src/utilities/router.php');
require Loader::basePath('src/utilities/request.php');
require Loader::basePath('src/utilities/database.php');

$config = require Loader::basePath('config/credentials.php');

$db = new Database($config['connectionString'], $config['username'], $config['password']);

require Router::load(Loader::basePath('src/utilities/routes.php'))->direct(Request::uri());