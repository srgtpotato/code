<?php
$validuser = "admin";
$validpass = "admin";

$username = $_POST['username'];
$password = $_POST['password'];


if ($username == $validuser && $password == $validpass) {

    header("Location: 1-admin.php?success");

} else {

    header("Location: 1-log-in.php?error=1");
    exit;
}
?>