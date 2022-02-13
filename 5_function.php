<?php
echo "Welcome to function <br>";

function process($marks){  //function decalation
    $sum=0;
    foreach($marks as $i){
        $sum += $i;
    }
    return $sum;
}

$ashif = array(75,85,90,78,67); //array

echo "Total marks of Ashif is ", process($ashif)," Out of 500. </br>"; //function calling

$Samim = [67,78,92,87,72]; //list
echo "Total marks of Samim is ", process($Samim)," Out of 500.</br>"; //function calling
?>