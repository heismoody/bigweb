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
    <title>Administrator</title>
</head>

<body>
    <?php include "../../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../Adminphp/navside.php"?>
        <div class="lorem">
            <div class="centering" style="height: 100%;">
                <div>
                    <div class="welcome1">
                        WELCOME TO
                    </div>
                    <div class="webname">
                        MOODY'S
                    </div>
                    <div class="centering">
                        <div class="welcomeparagraph">
                        Welcome to the Admin Dashboard! As an admin, you have the power to configure and manage various aspects of our website, ensuring a seamless experience for our users. From here, you can easily post books, enabling our users to explore a diverse range of literary gems. Engaging with the community is vital, and through this dashboard, you can foster connections and encourage discussions among users. Additionally, you can share news and updates to keep our users informed and engaged. We value your role in shaping the user experience and are excited to see how your configurations will enhance the platform. Thank you for your dedication to creating an enriching environment for book enthusiasts and fostering a thriving community of knowledge seekers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../Adminphp/adminfooter.php";?>
</body>

</html>