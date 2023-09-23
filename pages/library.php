<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("location: ./login.php");
    }

    include "../webphp/connection.php";

    $sql = "SELECT * FROM library";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pagescss/index.css">
    <title>Library</title>
</head>

<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
        <div class="lorem">
            <table>
                <tr>
                    <th>
                        Title
                    </th>
                    <th>
                        Author
                    </th>
                    <th>
                        Publisher
                    </th>
                    <th>
                        Year of Publication
                    </th>
                    <th>
                        Type
                    </th>
                </tr>
        <?php
                if(mysqli_num_rows($query) == 0){
        ?>
                <tr>
                    <td colspan="5">No Books So Far!!</td>
                </tr>
        <?php
                }else{
                    while($rows = mysqli_fetch_assoc($query)){
        ?>
                <tr>
                    <td><?php echo $rows["BTITLE"];?></td>
                    <td><?php echo $rows["AUTHOR"];?></td>
                    <td><?php echo $rows["PUBLISHER"];?></td>
                    <td><?php echo $rows["YOP"];?></td>
                    <td><?php echo $rows["BTYPE"];?></td>
                </tr>
        <?php
                    }
                }
        ?>
            </table>
        </div>
    </div>
    <?php include "../webphp/footer.php";?>
</body>

</html>