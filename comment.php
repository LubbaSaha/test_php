<?php
    require_once "connection.php";

    $conn= Connection::connection();

    $comment= $_POST['comment'];

    $sql="UPDATE test SET comment='$comment' WHERE id='$id'";

    $conn->query($sql);

    header("Location: index.php");
?>
