<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "db.php";
include VIEWS_DIR . "gallery/photo.php";

$id = (int) $_GET['id'];

$image = query("SELECT * FROM images WHERE id = {$id}");

