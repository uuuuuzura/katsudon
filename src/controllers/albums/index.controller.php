<?php

require Loader::basePath('src/models/album.model.php');

$albumData = $db->query("SELECT * FROM albums ORDER BY label ASC")->fetchAll();

$albums = array_map(function ($album) {
    return new Album($album['id'], $album['label'], $album['slug']);
}, $albumData);

Loader::view('albums/index', [
    'albums' => $albums
]);