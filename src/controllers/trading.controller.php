<?php

$tradingCards = $db->query("SELECT slug FROM cards WHERE status = 'trading' ORDER BY slug ASC")->fetchAll();

Loader::view('trading', [
    'tradingCards' => $tradingCards
]);