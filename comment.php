<?php

    require_once "connection.php";

    $conn= Connection::connect();

    $id= $_POST['id'];
    $title= $_POST['title'];
    $description=$_POST['description'];

    $sql= "INSERT INTO test(title,description) VALUES('$title','$description')";

    $conn->query($sql);

    header("Location: index.php");

?>
