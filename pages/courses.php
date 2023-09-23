<?php
    session_start();
    if(!isset($_SESSION["id"])){
        header("location: ./login.php");
    }
    include "../webphp/connection.php";

    $sql = "SELECT * FROM courses WHERE USERID = {$_SESSION["id"]}";
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../pagescss/index.css">
    <title>Courses</title>
</head>

<body>
    <?php include "../webphp/upribon.php"?>
    <div class="bodycontainer">
        <?php include "../webphp/navside.php"?>
        <div class="lorem">
            <div class="centering">
                <button id="idscourse" class="viewcourse" onclick="views()">View Courses</button>
                <button id="idscourse" class="registercourse" onclick="registering()">Register Courses</button>
            </div>
            <div class="displayform" style="display: none;">
                <div class="displayerror"></div>
                <form action="../webphp/coursereceiver.php" method="post">
                    <div class="centering" id="bigcenter">
                        <h2>
                            REGISTER YOUR COURSES.
                        </h2>
                    </div>
                    <div id=registrationform>
                        <div class="division">
                            <input type="text" name="ccode" id="" placeholder="Course Code" required>
                            <input type="text" name="cname" id="" placeholder="Course Name" required>
                            <input type="text" name="cinstructor" id="" placeholder="Instructors Name" required>
                            <select name="cdepartment" id="" required>
                                <option value="" disabled selected hidden>Course Department</option>
                                <option value="cs">cs</option>
                                <option value="ceit">ceit</option>
                                <option value="es">es</option>
                                <option value="te">te</option>
                            </select>
                            <select name="academicyear" id="" required>
                                <option value="" disabled selected hidden>Academic Year</option>
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                            </select>
                            <select name="semester" id="" required>
                                <option value="" disabled selected hidden>Semester</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                            </select>
                        </div>
                        <div>
                            <select name="result" id="selectone" required>
                                <option value="" disabled selected hidden>Result Grade</option>
                                <option value="A">A</option>
                                <option value="B+">B+</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="SUP">Supplimentary</option>
                            </select>
                            <textarea name="cdescription" id="" cols="30" rows="10" required >Write a brief course description</textarea>
                            <button type="submit" id="ids">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tobeviewed">
                <?php
                    if(mysqli_num_rows($query) == 0){
                ?>
                    <div class="centering" id="bigcenter">
                        <div>
                            <h2>
                                OPPSS!!! No Courses Registered
                            </h2>
                            <div class="centering">
                                <button class="registerbtn" onclick="registering()">Register Course</button>
                            </div>
                        </div>
                    </div>
                <?php
                    }else{
                ?>
                    <table id="coursetable">
                        <tr class="headerrow">
                            <th>Course Code</th>
                            <th>Course Name</th>
                            <th>Instructor Name</th>
                            <th>Course Department</th>
                            <th>Academic Year</th>
                            <th>Semester</th>
                            <th>Grade</th>
                            <th>Course Description</th>
                        </tr>
                        <?php
                                while($rows = mysqli_fetch_assoc($query)){
                        ?>
                        <tr>
                            <td><?php echo $rows["CCODE"];?></td>
                            <td><?php echo $rows["CNAME"];?></td>
                            <td><?php echo $rows["INAME"];?></td>
                            <td><?php echo $rows["CDEPARTMENT"];?></td>
                            <td><?php echo $rows["ACADEMICYEAR"];?></td>
                            <td><?php echo $rows["SEMISTER"];?></td>
                            <td><?php echo $rows["GRADE"];?></td>
                            <td><?php echo $rows["CDESCRIPTION"];?></td>
                        </tr>
                        <?php
                                }
                        ?>
                    </table>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
    <?php include "../webphp/footer.php";?>
    <script src="../javascript/mod.js"></script>
</body>

</html>