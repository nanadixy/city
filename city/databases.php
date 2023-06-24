<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DATABASE', 'city');
$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
if (!$connect) {
    die('Ошибка подключения к базе данных!');
}
