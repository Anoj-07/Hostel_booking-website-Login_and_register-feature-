<?php
$hostName = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbName = "login_register";
$conn = mysqli_connect($hostName , $dbuser , $dbpassword ,$dbName);
if(!$conn){
    die("Something went wrong");
}
?>