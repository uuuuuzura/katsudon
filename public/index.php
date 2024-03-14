<?php

// TODO: Remove debugging before pushing to production
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../src/utilities/router.php';
require __DIR__ . '/../src/utilities/request.php';
require __DIR__ . '/../src/utilities/database.php';

$config = require('../config/credentials.php');

$db = new Database($config['connectionString'], $config['username'], $config['password']);

require Router::load(__DIR__ . '/../src/utilities/routes.php')->direct(Request::uri());