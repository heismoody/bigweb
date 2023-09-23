<?php
    include "../../webphp/connection.php";

    $ntitle = $_POST['ntitle'];
    $newsdescription = $_POST['newsdescription'];

    $sql = "INSERT INTO news (NTITLE,NDESCRIPTION)VALUES('$ntitle','$newsdescription')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header("location: ../AdminPages/");
    }else{
        echo "Error occured ".mysqli_error($conn);
    }
?>