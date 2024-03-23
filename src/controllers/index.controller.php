<?php

require (__DIR__ . '/../models/level.model.php');

$cardCount = $db->query("SELECT COUNT(*) FROM cards")->fetchColumn();
$level = new Level($cardCount, $db);

require __DIR__ . '/../views/index.view.php';