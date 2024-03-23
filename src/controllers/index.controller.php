<?php

require (__DIR__ . '/../models/level.model.php');

function roundMaxCardNumber($cardCount) {
    if($cardCount <= 800) {
        return ceil($cardCount / 100) * 100;
    }

    if($cardCount <= 2400) {
        return ceil($cardCount / 200) * 200;
    }

    return ceil($cardCount / 300) * 300;
}

$cardCount = $db->query("SELECT COUNT(*) FROM cards")->fetchColumn();
$levelData = $db->query("SELECT label, bannerImg FROM levels WHERE maxCardCount = :cardCount", ['cardCount' => roundMaxCardNumber($cardCount)])->fetch();
$level = new Level($levelData['label'], $levelData['bannerImg']);

require __DIR__ . '/../views/index.view.php';