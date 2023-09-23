<?php
    include "../../webphp/connection.php";

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
        <div>
            <h3>Contacts</h3>
            <ul>
                <li>
                    <div>
                        <div></div>
                        <div><?php echo $footerrows['MOB_NUMB'];?></div>
                    </div>
                </li>
                <li>
                    <div>
                        <div></div>
                        <div><?php echo $footerrows["EMAIIL"];?></div>
                    </div>
                </li>
                <li>
                    <div>
                        <div></div>
                        <div><?php echo $footerrows["ADLOCATION"];?></div>
                    </div>
                </li>
            </ul>
        </div>
        <div>
            <h3>Social Contacts</h3>
            <ul>
                <li>
                    <div>
                        <div></div>
                        <div><?php echo $footerrows["TWITTER"];?></div>
                    </div>
                </li>
                <li>
                    <div>
                        <div></div>
                        <div><?php echo $footerrows["FACEBOOK"];?></div>
                    </div>
                </li>
                <li>
                    <div>
                        <div></div>
                        <div><?php echo $footerrows["INSTAGRAM"];?></div>
                    </div>
                </li>
            </ul>
        </div>
    </footer>