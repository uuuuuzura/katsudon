<?php

$tradingCards = $db->query("SELECT slug FROM cards WHERE status = 'trading' ORDER BY slug ASC")->fetchAll();

require __DIR__ . '/../views/trading.view.php';