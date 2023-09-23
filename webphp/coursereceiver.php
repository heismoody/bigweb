<?php
    session_start();
    include "./connection.php";

    $ccode = $_POST["ccode"];
    $cname = $_POST["cname"];
    $cinstructor = $_POST["cinstructor"];
    $cdepartment = $_POST["cdepartment"];
    $academicyear = $_POST["academicyear"];
    $semester = $_POST["semester"];
    $result = $_POST["result"];
    $cdescription = $_POST["cdescription"];

    $sql = "INSERT INTO courses (CCODE,CNAME,INAME,CDEPARTMENT,ACADEMICYEAR,SEMISTER,GRADE,CDESCRIPTION,USERID) VALUES ('$ccode','$cname','$cinstructor','$cdepartment','$academicyear','$semester','$result','$cdescription',{$_SESSION["id"]})";
    $query = mysqli_query($conn, $sql);

    if($query){
?>
    <script>
        window.location.href = '../pages/courses.php';
    </script>
<?php
        echo "Entered successful";
    }else{
?>
    <script>
        let displayerror = document.querySelector(".displayerror");
        function loaderror(){
            displayerror.innerHTML = "Something is wrong!! Sorry :(";
        }
        loaderror();
    </script>
<?php
    }
?>