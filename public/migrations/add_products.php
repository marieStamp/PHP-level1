<?php
$host = '127.0.0.1';
$login = 'root';
$password = 'root';
$dbName = 'pictures';

$connection = mysqli_connect($host, $login, $password, $dbName);

$sql = "INSERT INTO photos (name, size, url, id)
        VALUE ('Цветок', 300, 'img/1.jpg', 1),
        ('Море', 300, 'img/2.jpg', 2),
        ('Самолет', 300, 'img/3.jpg', 3),
        ('Вселенная', 300, 'img/4.jpg', 4),
        ('Озеро', 300, 'img/5.jpg', 5),
        ('Горы', 300, 'img/6.jpg', 6)
";

$res = mysqli_query(
    $connection, $sql
);

var_dump(mysqli_error($connection));
