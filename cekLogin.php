<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];


if($username == 'admin'){
    $_SESSION['username'] = $username;
    header("location:home.php");
}else{
    header("location:login.php");
}
?>