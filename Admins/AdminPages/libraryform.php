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
                    <h2>LIBRARY FORM DETAILS</h2>
                    <form action="../Adminphp/libraryreceiver.php" method="post">
                        <input type="text" name="btitle" id="inputsection" placeholder="Book Title:" required>
                        <input type="text" name="author" id="inputsection" placeholder="Author:" required>
                        <input type="text" name="publisher" id="inputsection" placeholder="Publisher:" required>
                        <input type="number" name="yop" id="inputsection" placeholder="Year of Publication" required>
                        <div class="formcentering">
                            <div>
                                <label for="type"><h4 style="font-size: 13px;">Academic Book:</h4></label>
                                <input type="radio" name="type" id="" value="Academic" required>
                            </div>
                            <div>
                                <label for="type"><h4 style="font-size: 13px;">Non-Academic Book:</h4></label required>
                                <input type="radio" name="type" id="" value="Non-Academic">
                            </div>
                        </div>
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