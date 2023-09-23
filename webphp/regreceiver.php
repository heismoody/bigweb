<?php
    session_start();
    include './connection.php';

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $sname = $_POST['sname'];
    $uname = $_POST['uname'];
    $passwd = $_POST['passwd'];
    $email = $_POST['email'];
    $mobno = $_POST['mobileno'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['Twitter'];
    $instagram = $_POST['Instagram'];

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["cvfile"]["name"]);
    $cv = basename($_FILES["cvfile"]["name"]);
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    // Check if file already exists
    if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["cvfile"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($FileType != "pdf" && $FileType != "docx" && $FileType != "doc") {
    echo "Sorry, only pdf, docx & doc files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["cvfile"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO users (FNAME,MNAME,SNAME,UNAME,PASSWD,EMAIL,MOBNUMBER,FACEBOOK,TWITTER,INSTAGRAM,CV) VALUES ('$fname','$mname','$sname','$uname','$passwd','$email','$mobno','$facebook','$twitter','$instagram','$cv')";
            $query = mysqli_query($conn, $sql);

            if($query){
                $sqllogin = "SELECT ID, UNAME FROM users WHERE EMAIL = '$email' AND PASSWD = '$passwd'";
                $querylogin = mysqli_query($conn, $sqllogin);

                if(mysqli_num_rows($querylogin) > 0){
                    $row = mysqli_fetch_assoc($querylogin);

                    $_SESSION["id"] = $row["ID"];
                    $_SESSION["username"] = $row["UNAME"];
                    header("location: ../pages/");
                }else{
                    echo "There is a problem with Login users";
                }
            
            }else{
                echo "Error occured ".mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>