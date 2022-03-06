<?php
echo "Welecome To Database connection tutorial.<br>";
$serverName = "localhost";
$username = "root";
$password ="";
$con = mysqli_connect($serverName,$username,$password);
if(!$con){
    die("Connection is faild".mysqli_connect_error());
}
echo "Connected successfully";
?>