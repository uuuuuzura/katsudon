<?php

require Loader::basePath('src/models/level.model.php');

$cardCount = $db->query("SELECT COUNT(*) FROM cards")->fetchColumn();
$level = new Level($cardCount, $db);

$lastUpdatedString = $db->query("SELECT date from logs ORDER BY date DESC")->fetchColumn();
$lastUpdated = date_create($lastUpdatedString);

Loader::view('index', [
    'cardCount' => $cardCount,
    'level' => $level,
    'lastUpdated' => $lastUpdated
]);