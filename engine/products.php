<?php
require_once ENGINE_DIR . "db.php";

function getPhotos() {
    $sql = "SELECT * FROM photos";

    return query($sql);
}