
<?php

include "1-conn.php";

$ln = $_POST['lname'] ;
$fn = $_POST['fname'] ;
$mn = $_POST['mname'] ;
$s = $_POST['sex'] ;
$studid = $_POST['studentid'] ;
$con = $_POST['contact'] ;
$dobirth = $_POST['dob'] ;
$pp = $_POST['user'];

$sql = "INSERT INTO student (lname, fname, mname, sex, studentid, contact, DOB, img) VALUES ('$ln','$fn', '$mn', '$s', '$studid', '$con', '$dobirth', '$pp')";
 if(mysqli_query($conn, $sql)){
    header("location: 1-register.php?success");
}
     else{
        echo "ERROR: Hush! Sorry $sql. " 
                .mysqli_error($conn);
    }
mysqli_close($conn);
?>