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
$sql = "Create table customer(Id int NOT NULL AUTO_INCREMENT, Name varchar(50) NOT NULL,Address varchar(250) NOT NULL, Phone int NOT NULL,PRIMARY KEY (Id))";

$result = mysqli_query($con,$sql);
if($result){
    echo "Table created successfully <br>";
}
else{
    echo "Table is not created successfully ". mysqli_error($con);
}

?>