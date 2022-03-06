<?php

echo "Updating database table<br>";

$serverName ="localhost";
$userName = "root";
$password = "";
$database = "ashif";

$con = mysqli_connect($serverName,$userName,$password,$database);

if(!$con){
    die("Database not connected ".mysqli_connect_error()."<br>");
}
else{
    echo "Database connected successfully<br>";
}

$sql = "UPDATE customer SET Name = 'Asraf Uddin', Address= 'Dhaka' WHERE Id = 3;";

$result = mysqli_query($con,$sql);

if($result){
    echo "Table updated successfully <br>";
}
else{
    echo "Table is not updated successfully ". mysqli_error($con);
}

$sql1 = "SELECT * FROM customer";

$result1 = mysqli_query($con,$sql1);

$num =  mysqli_num_rows($result1)."<br>";
echo $num."<br>";

if($num>0){
    while($row = mysqli_fetch_assoc($result1)){
        echo $row['Id']." ".$row['Name']." ".$row['Address']." ".$row['Phone'];
        echo "<br>";
    }
}

?>