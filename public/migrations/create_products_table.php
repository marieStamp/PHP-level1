<?php

$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'pictures';

$connection = mysqli_connect($host, $login, $password, $dbName);
$sql = "
    CREATE TABLE photos (
        name varchar(128) NOT NULL,
        size int NOT NULL,
        url varchar(128),
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT

    )";

$res = mysqli_query(
    $connection, $sql
);