<?php
    include "../../webphp/connection.php";

    $comtitle = $_POST['ctitle'];
    $cstart = $_POST['cstart'];
    $edate = $_POST['edate'];
    $comdescription = $_POST['comdescription'];

    $sql = "INSERT INTO community (CTITLE,CSTART,CEND,CDESCRIPTION) VALUES ('$comtitle','$cstart','$edate','$comdescription')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("location: ../AdminPages/");
    }else{
        echo "Error occured ".mysqli_error($conn);
    }
?>