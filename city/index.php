<?php
include 'databases.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Videogames</title>
</head>
<style>
    th, td {
        padding: 10px;
    }
    th {
        background: #606060;
        color: #fff;
    }
    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Genre</th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <?php
            $videogames = mysqli_query($connect, query:"SELECT * FROM `videogames`");
            $videogames = mysqli_fetch_all($videogames);
            foreach ($videogames as $videogames) {
                ?>
                    <tr>
                        <td><?= $videogames[0] ?></td>
                        <td><?= $videogames[1] ?></td>
                        <td><?= $videogames[2] ?></td>
                        <td><?= $videogames[3] ?></td>
                        <td><a href="game.php?id=<?= $videogames[0] ?>">View</a></td>
                        <td><a href="update.php?id=<?= $videogames[0] ?>">Update</a></td>
                        <td><a style="color: red;" href="js/delete.php?id=<?= $videogames[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Add new videogame</h3>
    <form action="js/create.php" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>Genre</p>
        <textarea name="genre"></textarea>
        <p>Price</p>
        <input type="number" name="price"> <br> <br>
        <button type="submit">Add new games </button>
    </form>
</body>
</html>
