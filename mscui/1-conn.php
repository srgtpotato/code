<?php 

$conn = new mysqli("localhost","root","","portfolio");
if($conn->connect_error){
    die("error " .$conn->connect_error);
}
?>