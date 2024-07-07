
<?php

include "1-conn.php";

$ln = $_POST['lname'] ;
$fn = $_POST['fname'] ;
$mn = $_POST['mname'] ;
$a = $_POST['ay'] ;
$sem = $_POST['semester'] ;
$c = $_POST['cy'] ;
$co = $_POST['course'] ;
$m = $_POST['major'] ;


$sql = "INSERT INTO enrollee (lname, fname, mname, ay, semester, cy, course, major) VALUES ('$ln','$fn', '$mn','$a','$sem', '$c', '$co', '$m')";
 if(mysqli_query($conn, $sql)){
    header("location: 1-enroll.php?success");
}
     else{
        echo "ERROR: Hush! Sorry $sql. " 
                .mysqli_error($conn);
    }
mysqli_close($conn);
?>