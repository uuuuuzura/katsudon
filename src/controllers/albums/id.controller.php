<?php

require Loader::basePath('src/models/deck.model.php');

$albumId = $_GET['id'];

$album = $db->query("SELECT label FROM albums WHERE id = :id", ['id' => $albumId])->fetch();

if (!$album) {
    require Router::load(Loader::basePath('src/utilities/routes.php'))->direct('404');
    exit(0);
}

$decksData = $db->query("SELECT id, slug, label, color FROM decks WHERE albumId = :id ORDER BY color, slug ASC", ['id' => $albumId])->fetchAll();

$decks = array_map(function ($deck) use ($db) {
    $deckObject = new Deck($deck['id'], $deck['slug'], $deck['label'], $deck['color']);
    $deckObject->getCollectedCards($db);
    return $deckObject;
}, $decksData);

Loader::view('albums/id', [
    'album' => $album,
    'decks' => $decks
]);