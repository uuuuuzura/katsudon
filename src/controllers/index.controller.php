<?php

require (__DIR__ . '/../models/level.model.php');

$cardCount = $db->query("SELECT COUNT(*) FROM cards")->fetchColumn();
$level = new Level($cardCount, $db);

$lastUpdatedString = $db->query("SELECT date from logs ORDER BY date DESC")->fetchColumn();
$lastUpdated = date_create($lastUpdatedString);

require __DIR__ . '/../views/index.view.php';