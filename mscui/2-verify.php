<?php

session_start();
include "1-conn.php";

if(isset($_POST['studentid'])){
    $studid = $_POST['studentid'];

    $sql = "SELECT * FROM student WHERE studentid = '$studid'";
    $result = $conn->query($sql);
    if($result->num_rows==1){
        $row=$result->fetch_assoc();
        if($row['studentid']==$studid){
            $_SESSION['id'] = $row['id'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['mname'] = $row['mname'];
            $_SESSION['sex'] = $row['sex'];
            $_SESSION['DOB'] = $row['DOB'];
            $_SESSION['img'] = $row['img'];

            header("Location: 1-enroll.php");



        }
    }
}
else{
    echo '<script>alert("ID Not Found")</script>';
}
?>