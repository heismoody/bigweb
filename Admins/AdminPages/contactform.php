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
    <title>Library Form</title>
</head>

<body>
    <?php include "../../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../Adminphp/navside.php"?>
        <div class="lorem">
            <div class="centering">
                <div>
                    <h2>CONTACT FORM DETAILS</h2>
                    <form action="../Adminphp/contactreceiver.php" method="post">
                        <input type="number" name="adnumber" id="inputsection" placeholder="Mobile number: 0767532832" required>
                        <input type="email" name="ademail" id="inputsection" placeholder="email: mymail@email.com" required>
                        <input type="text" name="location" id="inputsection" placeholder="Location: Makumbusho - Dar es Salaam" required>
                        <input type="text" name="adtwitter" id="inputsection" placeholder="Twitter Name: He.ismoody" required>
                        <input type="text" name="adfacebook" id="inputsection" placeholder="Facebook Name: Moody Amin" required>
                        <input type="text" name="adinstagram" id="inputsection" placeholder="Instagram Name: Heis.moody" required>
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