<nav>
            <div class="navdiv">
                <ul>
                    <a href="../Adminpages/">
                        <li class="lists">
                            Home
                        </li>
                    </a>
                    <a href="../AdminPages/communityform.php">
                        <li class="lists">
                            Community Engagement
                        </li>
                    </a>
                    <a href="../AdminPages/newsform.php">
                        <li class="lists">
                            News
                        </li>
                    </a>
                    <a href="../AdminPages/libraryform.php">
                        <li class="lists">
                            Library
                        </li>
                    </a>
                    <a href="../AdminPages/contactform.php">
                        <li class="lists">
                            Contact
                        </li>
                    </a>
<?php
                    if(isset($_SESSION["admin"])){
?>
                    <a href="../../pages">
                        <li class="lists">
                            UsersPage
                        </li>
                    </a>   
<?php
                    }
?>
<?php
                    if(isset($_SESSION["admin"])){
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
        header("location: ../../pages");
    }
?>