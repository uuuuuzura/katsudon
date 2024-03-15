<?php

require (__DIR__ . '/../models/deck.model.php');

$albumId = $_GET['id'];

$album = $db->query("SELECT label FROM albums WHERE id = :id", ['id' => $albumId])->fetch();

if (!$album) {
    throw new Exception('Page not found.');
}

$decksData = $db->query("SELECT slug, label, color FROM decks WHERE albumId = :id ORDER BY color, slug ASC", ['id' => $albumId])->fetchAll();

$decks = array_map(function ($deck) {
    return new Deck($deck['slug'], $deck['label'], $deck['color']);
}, $decksData);

require __DIR__ . '/../views/album.view.php';