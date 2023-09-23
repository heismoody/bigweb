<?php
    include "../../webphp/connection.php";

    $btitle = $_POST['btitle'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $yop = $_POST['yop'];
    $type = $_POST['type'];

    $sql = "INSERT INTO library (BTITLE,AUTHOR,PUBLISHER,YOP,BTYPE)VALUES('$btitle','$author','$publisher','$yop','$type')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header("location: ../AdminPages/");
    }else{
        echo "Error occured ".mysqli_error($conn);
    }
?>