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
    <title>CommunityForm</title>
</head>

<body>
    <?php include "../../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../Adminphp/navside.php"?>
        <div class="lorem">
            <div class="centering">
                <div>
                    <h2>COMMUNITY FORM DETAILS</h2>
                    <form action="../Adminphp/communityreceiver.php" method="post">
                        <input type="text" name="ctitle" id="inputsection" placeholder="Community Title:" required>
                        <input type="date" name="cstart" id="inputsection" placeholder="Commence Date:" required>
                        <input type="text" name="edate" id="inputsection" placeholder="Ended Date" required>
                        <textarea name="comdescription" id="inputsection" cols="30" rows="10" placeholder="Enter description" required></textarea>
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