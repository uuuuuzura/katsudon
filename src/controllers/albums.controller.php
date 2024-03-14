<?php

require(__DIR__ . '/../models/album.model.php');

$albumData = $db->query("SELECT * FROM albums ORDER BY label ASC")->fetchAll();

$albums = array_map(function ($album) {
    return new Album($album['label'], $album['slug']);
}, $albumData);

require __DIR__ . '/../views/albums.view.php';