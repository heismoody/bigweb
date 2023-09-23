<?php
    session_start();
    include "../webphp/connection.php";
    $sql = "SELECT * FROM community";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pagescss/index.css">
    <title>Community</title>
</head>

<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
        <div class="lorem">
        <?php
            if(mysqli_num_rows($query) == 0){
        ?>
        <div class="centering" id="bigcenter">
            <div>
                <h2>
                    Sorry!!! There are no any community activities
                </h2>
            </div>
        </div>
        <?php
            }else{
                while($rows = mysqli_fetch_assoc($query)){
        ?>
        <div class="communitycontainer">
            <div class="communityheader">
                <div class="communitytitle">
                    <?php echo $rows["CTITLE"]?>
                </div>
                <div class="communityduration">
                    <?php echo $rows["CSTART"] ?> - <?php echo $rows["CEND"]?>
                </div>
            </div>
            <div>
                <P>
                    <?php echo $rows["CDESCRIPTION"]?>
                </P>
            </div>
        </div>
        <?php
                }
            }
        ?>
        </div>
    </div>
    <?php include "../webphp/footer.php";?>
</body>

</html>