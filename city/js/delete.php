<?php
include '../databases.php';
$videogames_id = $_GET['id'];
mysqli_query($connect, "DELETE FROM `videogames` WHERE `videogames`.`videogames_id` = '$videogames_id'");
header('Location: ../index.php');
?>