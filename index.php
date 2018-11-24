<?php

    require_once "connection.php";

    $conn=  Connection::connect();

    $sql= "SELECT title,description FROM test";

    $result= $conn->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Test Page</title>
        <style>
            .card{
                background: #333;
                color: #fff;
                width: 50%;
                margin: 20px;
                padding: 20px;
            }
        </style>
    </head>
    <body>

        <form action="update.php" method="post">
            <input type="text" name="id" value="id">
            <input type="text" name="title">
            <input type="submit" name="submit" value="Submit for update">
        </form>

        <form action="comment.php" method="post">
            <input type="text" name="title" value="">
            <input type="text" name="description" value="">
            <input type="submit" name="submit" value="Submit for insert">
        </form>

        <?php
            if($result->num_rows > 0){
                while($row= $result->fetch_assoc()){
                    echo "<div class='card'>";
                    echo "<h1> Title: " . $row['title'] . "</h1>";
                    echo "<p> Descrition: " . $row['description'] . "</p>";
                    echo "</div>";
                }
            }
        ?>

    </body>
</html>
