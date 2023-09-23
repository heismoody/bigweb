<?php
    include "../webphp/connection.php";

    $footersql = "SELECT * FROM contact";
    $footerquery = mysqli_query($conn, $footersql);
    $footerrows = mysqli_fetch_assoc($footerquery);
?>

<footer>
        <div class="logo" style="display: flex; align-items: center;">
            <div>
                <div>MOODY'S</div>
                <div class="sublogo">website</div>
            </div>
        </div>
        <div>
            <h3>Quick Link</h3>
            <ul>
                <li>
                    Home
                </li>
                <li>
                    Register
                </li>
                <li>
                    Cv
                </li>
                <li>
                    News
                </li>
            </ul>
        </div>
        <div class="mycontact">
            <h3>Contacts</h3>
            <ul>
                <li>
                    <div class="userdisplay">
                        <div class="icondiv">
                            <i class="fa-solid fa-phone-volume" style="color: #000000;"></i>
                        </div>
                        <div>0<?php echo $footerrows['MOB_NUMB'];?></div>
                    </div>
                </li>
                <li>
                    <div class="userdisplay">
                        <div class="icondiv">
                            <i class="fa-solid fa-envelope" style="color: #000000;"></i>
                        </div>
                        <div><?php echo $footerrows["EMAIIL"];?></div>
                    </div>
                </li>
                <li>
                    <div class="userdisplay">
                        <div class="icondiv">
                            <i class="fa-solid fa-location-dot" style="color: #000000;"></i>
                        </div>
                        <div><?php echo $footerrows["ADLOCATION"];?></div>
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <h3>Social Contacts</h3>
            <ul>
                <li>
                    <div class="userdisplay">
                        <div class="icondiv">
                            <img width="20" height="20" src="https://img.icons8.com/fluency/48/twitter.png" alt="twitter"/>
                        </div>
                        <div><?php echo $footerrows["TWITTER"];?></div>
                    </div>
                </li>
                <li>
                    <div class="userdisplay">
                        <div class="icondiv">
                            <img width="20" height="20" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
                        </div>
                        <div><?php echo $footerrows["FACEBOOK"];?></div>
                    </div>
                </li>
                <li>
                    <div class="userdisplay" style="align-items: center;">
                        <div class="icondiv">
                            <img width="20" height="20" src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new"/>
                        </div>
                        <div><?php echo $footerrows["INSTAGRAM"];?></div>
                    </div>
                </li>
            </ul>
        </div>
    </footer>