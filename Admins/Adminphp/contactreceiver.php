<?php
    include "../../webphp/connection.php";

    $mobilenumber = $_POST['adnumber'];
    $adminemail = $_POST['ademail'];
    $adminlocation = $_POST['location'];
    $admintwitter = $_POST['adtwitter'];
    $adminfacebook = $_POST['adfacebook'];
    $admininstagram = $_POST['adinstagram'];

    $sql = "INSERT INTO Contact (MOB_NUMB,EMAIIL,ADLOCATION,TWITTER,FACEBOOK,INSTAGRAM)VALUES('$mobilenumber','$adminemail','$adminlocation','$admintwitter','$adminfacebook','$admininstagram')";

    $query = mysqli_query($conn, $sql);

    if($query){
        header("location: ../AdminPages/");
    }else{
        echo "Error occured ".mysqli_error($conn);
    }
?>