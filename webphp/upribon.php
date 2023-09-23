<div class="logodiv">
        <div class="logo" style="display: flex; align-items: center;">
            <div>
                <div>MOODY'S</div>
                <div class="sublogo">website</div>
            </div>
        </div>
        <div class="userdisplay">
            <?php
                if(isset($_SESSION["username"])){
            ?>
                <div id="username"><?php echo $_SESSION["username"];?></div>
                <div class="imgcontainer">
                    <img src="" alt="" srcset="">
                </div>
            <?php
                }else{
                    if(isset($_SESSION["admin"])){
            ?>  
                <div id="username"><?php echo $_SESSION["admin"];?></div>
                <div class="imgcontainer">
                    <img src="" alt="" srcset="">
                </div>
            <?php
                }else{
            ?>
                <div>
                    <button id="btn"><a href="../pages/login.php">LOG IN</a></button>
                </div>
            <?php
                    }
                }
            ?>
            
        </div>
</div>