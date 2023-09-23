<?php
    $conn = mysqli_connect("localhost","Administrator","zero123tech","bigweb");

    if(!$conn){
        echo "There is an error sir ". mysqli_error($conn);
    }
?>