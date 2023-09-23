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
    <title>Registration Form</title>
</head>

<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
        <div class="lorem">
            <form action="../webphp/regreceiver.php" method="post" onsubmit="checkpassword(event);" enctype="multipart/form-data">
                <div id="registrationform">
                    <div>
                        <h4>Personal Details:</h4>
                        <input type="text" name="fname" id="" placeholder="First Name" required>
                        <input type="text" name="mname" id="" placeholder="Middle Name" required>
                        <input type="text" name="sname" id="" placeholder="SurName" required>
                        <input type="text" name="uname" id="" placeholder="Username" required>
                        <input type="file" name="cvfile" id="">
                    </div>
                    <div>
                        <h4>Password Setup:</h4>
                        <input type="password" name="passwd" id="pass" placeholder="Enter password" required>
                        <input type="password" name="confirmpasswd" id="confirmpass" placeholder="Confirm password" required>
                        <span id="passerror"></span>
                        <div>
                            <h4>PASSWORD TIPS</h4>
                            <ul class="tipslist">
                                <li>
                                    <i class="fa-solid fa-circle-small" id="iconchange" style="color: #ff7f50;"></i>
                                    <span>Must contain atleast 10 characters</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-small" id="iconchange" style="color: #ff7f50;"></i>
                                    <span>Must contain atleast 1 [0-9]</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-small" id="iconchange" style="color: #ff7f50;"></i>
                                    <span>Must contain atleast 1 [a-z]</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-small" id="iconchange" style="color: #ff7f50;"></i>
                                    <span>Must contain atleast 1 [A-Z]</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-small" id="iconchange" style="color: #ff7f50;"></i>
                                    <span>Must contain atleast 1 [@,#,$,!]</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h4>Contact Details:</h4>
                        <input type="email" name="email" id="" placeholder="myemail@gmail.com" required>
                        <input type="number" name="mobileno" id="" placeholder="0765 428 908" pattern="[0-9]{10}" required>
                        <input type="text" name="facebook" id="" placeholder="moodyamin" required>
                        <input type="text" name="Twitter" id="" placeholder="heismoody" required>
                        <input type="text" name="Instagram" id="" placeholder="moodyamin" required>
                        
                    </div>
                </div>
                <div class="centering">
                    <div class="fixing">
                        <button type="submit" id="ids">SUBMIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include "../webphp/footer.php";?>
    <script src="../javascript/checker.js"></script>
</body>

</html>