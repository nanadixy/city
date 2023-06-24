<?php
include '../databases.php';
$videogames_id = $_POST['videogames_id'];
$name = $_POST['name'];
$genre = $_POST['genre'];
$price = $_POST['price'];
mysqli_query($connect, "UPDATE `videogames` SET `name` = '$name', `price` = '$price', `genre` = '$genre' WHERE `videogames`.`videogames_id` = '$videogames_id'");
header('Location: ../index.php');
?>