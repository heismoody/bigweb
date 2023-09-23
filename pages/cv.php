<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("location: ./login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pagescss/index.css">
    <title>My Cv</title>
</head>

<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
        <div class="lorem">
            <object data="../resources/MoodyCV.pdf" type="application/pdf" width="100%" height="100%">
            <p>OPPSS!! getting trouble to open <a href="../resources/cvtesting.pdf">Download it Here</a></p>
        </object>
    </div>
    </div>
    <?php include "../webphp/footer.php";?>
</body>

</html>