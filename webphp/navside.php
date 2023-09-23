<nav>
    <div class="navdiv">
        <ul>
            <a href="./">
                <li class="lists">
                    Home
                </li>
            </a>
            <a href="./about.php">
                <li class="lists">
                    About Me
                </li>
            </a>
            <a href="./regform.php">
                <li class="lists">
                    Register
                </li>
            </a>
            <a href="./courses.php">
                <li class="lists">
                    Courses
                </li>
            </a>
            <a href="./cv.php">
                <li class="lists">
                    CV
                </li>
            </a>
            <a href="./community.php">
                <li class="lists">
                    Community Engagement
                </li>
            </a>
            <a href="./news.php">
                <li class="lists">
                    News
                </li>
            </a>
            <a href="./library.php">
                <li class="lists">
                    Library
                </li>
            </a>
<?php
    if(isset($_SESSION["admin"])){
?>
            <a href="../Admins/AdminPages/">
                <li class="lists">
                    AdminPage
                </li>
            </a>   
<?php
    }
?>
<?php
    if(isset($_SESSION["username"]) || isset($_SESSION["admin"])){
?>
            <li>
                <form action="" method="post" id="listedform">
                    <input type="submit" value="Logout" name="logout">
                </form>
            </li>
<?php
    }
?>
        </ul>
    </div>
</nav>
<?php
    if(isset($_POST['logout'])){
        session_unset();
        session_destroy();
        header("location: ../pages");
    }
?>