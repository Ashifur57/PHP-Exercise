<?php
echo "Deleting a database table using PHP<br>";

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
$sql = "DROP TABLE customer";

$result = mysqli_query($con,$sql);
if($result){
    echo "Table deleted successfully <br>";
}
else{
    echo "Table is not deleted successfully ". mysqli_error($con);
}

?>