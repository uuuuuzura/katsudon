<?php

require __DIR__ . '/../src/utilities/router.php';
require __DIR__ . '/../src/utilities/request.php';

require Router::load(__DIR__ . '/../src/utilities/routes.php')->direct(Request::uri());