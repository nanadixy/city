<?php
    include 'databases.php';
    $videogames_id = $_GET['id'];
    $script = mysqli_query($connect, "SELECT * FROM `videogames` WHERE `videogames_id` = '$videogames_id'");
    $script = mysqli_fetch_assoc($script);
    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `videogame_id` = '$videogames_id'");
    $comments = mysqli_fetch_all($comments);
?>
<!doctype html>
<html lang="en">
<head>
    <title>Videogames</title>
</head>
<body>
    <h2>Name: <?= $script['name'] ?></h2>
    <h4>Videogames: <?= $script['price'] ?></h4>
    <h4>Genre: </h4> <p> <?= $script['genre'] ?></p>
    <hr>
    <h3>Add comment</h3>
    <form action="js/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $script['videogames_id'] ?>">
        <textarea name="text"></textarea> <br><br>
        <button type="submit">Add comment</button>
    </form>
    <hr>
    <h3>Comments</h3>
    <ul>
        <?php
            foreach ($comments as $comment) {
            ?>
                <li><?= $comment[1] ?></li>
            <?php
            }
        ?>
    </ul>
</body>
</html>
