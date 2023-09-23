<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pagescss/index.css">
    <title>Big web</title>
</head>

<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
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
                            Welcome to Moody's! We are thrilled to introduce you to a platform that aims to revolutionize the way students keep track of their university courses and share their academic journey. Whether you're a student looking to stay organized or a curious reader seeking book recommendations, you've come to the right place. In addition to providing a comprehensive record of your courses, this site also showcases my personal CV, allowing you to learn more about my background and expertise. Moreover, you'll find a curated collection of books I've read, creating an opportunity for you to explore new literary gems. We invite you to delve into this multifaceted platform, discover the world of knowledge, and learn more about who I am.
                        </div>
                    </div>
                    <div class="centering">
                        <div class="fixing">
                            <button id="ids"><a href="./regform.php">REGISTER</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../webphp/footer.php";?>
</body>

</html>