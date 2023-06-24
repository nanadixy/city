<?php
require_once '../databases.php';
$name = $_POST['name'];
$genre = $_POST['genre'];
$price = $_POST['price'];
mysqli_query($connect, query:"INSERT INTO `videogames` (`name`, `price`, `genre`) VALUES ('$name', '$price', '$genre')");
header('Location: ../index.php');