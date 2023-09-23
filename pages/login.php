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
    <title>Login</title>
</head>
<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
        <div class="lorem">
            <div class="centering">
                <form action="" method="post">
                    <h3 class="newsheading">LOG IN</h3>
                    <div class="displayerror"></div>
                    <input type="text" name="username" placeholder="email@email.com" required>
                    <input type="password" name="passwd" placeholder="Password" required>
                    <input type="submit" value="SUBMIT" name="login" id="ids">
                </form>
            </div>
        </div>
    </div>
    <?php include "../webphp/footer.php";?>
</body>
</html>

<?php
    if(isset($_POST['login'])){
        $username = $_POST["username"];
        $passwd = $_POST["passwd"];

        include "../webphp/connection.php";

        $sql = "SELECT ID, UNAME FROM users WHERE EMAIL = '$username' AND PASSWD = '$passwd'";
        $query = mysqli_query($conn, $sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $_SESSION["id"] = $row["ID"];
            $_SESSION["username"] = $row["UNAME"];
?>
        <script>
            window.location.href = './';
        </script>
<?php
        }else{
            if($username == "Administrator" && $passwd == "Zero123@tech"){
                $_SESSION["admin"] = "Administrator";
?>
        <script>
            window.location.href = '../Admins/AdminPages';
        </script>
<?php 
            }else{
?>
        <script>
            let displayerror = document.querySelector(".displayerror");
            function loaderror(){
                displayerror.innerHTML = "Either Password or Username is incorrect";
            }
            loaderror();
        </script>
<?php
            }
        }
    }
?>