<?php
echo "Selecting a database table using PHP<br>";

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

$sql = "SELECT * FROM customer";

$result = mysqli_query($con,$sql);

$num =  mysqli_num_rows($result)."<br>";
echo $num."<br>";

if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['Id']." ".$row['Name']." ".$row['Address']." ".$row['Phone'];
        echo "<br>";
    }
}

?>