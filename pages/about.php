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
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <title>About</title>
</head>

<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
        <div class="lorem">
            <div class="centering">
                <div class="aboutimg">
                    <img src="../resources/me.jpg" alt="me" srcset="" class="myimg">
                </div>
            </div>
            <div class="centering">
                <div class="welcomeparagraph">
                    I am Moody Amin Mshana, a dedicated individual currently pursuing a BSc in Computer Science at the university. My educational journey began at Amani Nursery and Primary School, followed by completing my secondary education at Eagles Secondary School. Later, I furthered my studies in Maji Ya Chai for high school and obtained a diploma in Computer Science from the University of Dar es Salaam. Computers have always been a passion of mine, driving my commitment to explore and excel in the field.
                </div>
            </div>
            <div class="centering">
                <div class="aboutdetails">
                    <div>
                        <h3>CAREER GOALS</h3>
                        <p>
                            <span><i class="fa-regular fa-code fa-lg" style="color: #da7707;"></i></span>
                            Web Development (Javascript)
                        </p>
                        <p>
                            <span><i class="fa-solid fa-briefcase fa-lg" style="color: #da7707;"></i></span>
                            Enterprenuer
                        </p>
                    </div>
                    <div>
                        <h3>SPONSORING</h3>
                        <p>
                            <span>
                                <i class="fa-regular fa-sack-dollar fa-lg" style="color: #ff9500;"></i>
                            </span>
                            Self - Sponsored
                        </p>
                    </div>
                    <div>
                        <h3>FAVORITE PROGRAMME</h3>
                        <p>
                            <span>
                            <i class="fa-duotone fa-browser fa-lg" style="--fa-primary-color: #da7707; --fa-secondary-color: #df870c;"></i>
                            </span>
                            Web Programming
                        </p>
                        <p>
                            <span>
                                <i class="fa-brands fa-java fa-lg" style="color: #ff9500;"></i>
                            </span>
                            Java Programming
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "../webphp/footer.php";?>
</body>

</html>