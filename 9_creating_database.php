<?php
echo "Craeting a database using PHP<br>";
$serverName ="localhost";
$username = "root";
$password ="";

$con = mysqli_connect($serverName,$username,$password);
if(!$con){
    die("Connection is not successfull".mysqli_connect_error(). "<br>");
}
echo "Connected Successfully<br>";

$sql = "Create database Ashif";
$result = mysqli_query($con,$sql);
if($result){
    echo "Database Created successfully<br>";
}
else{
    echo "Database is not created successfully because of this erreor ".mysqli_error($con)."<br>";
}

?>