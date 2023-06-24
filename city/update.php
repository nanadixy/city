<?php
    include 'databases.php';
    $videogames_id = $_GET['id'];
    $videogames = mysqli_query($connect, "SELECT * FROM `videogames` WHERE `videogames_id` = '$videogames_id'");
    $videogames = mysqli_fetch_assoc($videogames);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update videogames</title>
</head>
<body>
    <h3>Update videogames</h3>
    <form action="js/update.php" method="post">
        <input type="hidden" name="videogames_id" value="<?= $videogames['videogames_id'] ?>">
        <p>Name</p>
        <input type="text" name="name" value="<?= $videogames['name'] ?>">
        <p>Videogames</p>
        <textarea name="genre"><?= $videogames['genre'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $videogames['price'] ?>" step="0.01"> <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
