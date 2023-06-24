<?php
include '../databases.php';
$text = $_POST['text'];
$videogame_id = $_POST['id'];
mysqli_query($connect, "INSERT INTO `comments` (`text`, `videogame_id`, `user_id`) VALUES ('$text', '$videogame_id', 1)");
header('Location: ../game.php?id=' . $videogame_id . '.');
?>