<?php

require (__DIR__ . '/../../models/deck.model.php');

$albumId = $_GET['id'];

$album = $db->query("SELECT label FROM albums WHERE id = :id", ['id' => $albumId])->fetch();

if (!$album) {
    require Router::load(__DIR__ . '/../utilities/routes.php')->direct('404');
    exit (0);
}

$decksData = $db->query("SELECT id, slug, label, color FROM decks WHERE albumId = :id ORDER BY color, slug ASC", ['id' => $albumId])->fetchAll();

$decks = array_map(function ($deck) use ($db) {
    $deckObject = new Deck($deck['id'], $deck['slug'], $deck['label'], $deck['color']);
    $deckObject->getCollectedCards($db);
    return $deckObject;
}, $decksData);

require __DIR__ . '/../../views/albums/id.view.php';