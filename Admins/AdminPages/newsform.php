<?php
    session_start();
    if(!isset($_SESSION["admin"])){
        header("location: ../../pages/login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../pagescss/index.css">
    <title>News Form</title>
</head>

<body>
    <?php include "../../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../Adminphp/navside.php"?>
        <div class="lorem">
            <div class="centering">
                <div class="order">
                    <h2>NEWS FORM DETAILS</h2>
                    <form action="../Adminphp/newsreceiver.php" method="post">
                        <input type="text" name="ntitle" id="inputsection" placeholder="News Title:" required>
                        <textarea name="newsdescription" id="" cols="30" rows="10" placeholder="Enter Description" required></textarea>
                        <div class="submitcentering">
                            <div class="adminfix">
                                <button type="submit" id="ids">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include "../Adminphp/adminfooter.php";?>
</body>

</html>