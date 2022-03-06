<?php
echo "Craeting a database table using PHP<br>";

$serverName = "localhost";
$userName = "root";
$password = "";
$database = "ashif";
$con = mysqli_connect($serverName,$userName,$password,$database);
if(!$con){
    die("Connection is not successfull".mysqli_connect_error(). "<br>");
}
else{
    echo "Database connection successfull <br>";
}
$name = "Saiful";
$add = "Tangail";
$sql = "INSERT INTO customer (Name, Address, Phone) VALUES ('$name','$add',01785263456)";

$result = mysqli_query($con,$sql);
if($result){
    echo "Data insert successfully <br>";
}
else{
    echo "Data is not insert successfully ". mysqli_error($con);
}

?>