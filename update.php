<?php

    require_once "connection.php";

    $conn= Connection::connect();

    $id= $_POST['id'];
    $title= $_POST['title'];

    $sql= "UPDATE test SET title='$title' WHERE id='$id'";

    $conn->query($sql);

    header("Location: index.php");

?>
