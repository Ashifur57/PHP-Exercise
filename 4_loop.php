<?php
$var1 = array(1,6,3,9,5,7,4,11,2);// array declaration
$var2 = sizeof($var1); // size calculation

echo "size = ",$var2, "<br>" ;
echo "<br>";
echo "for loop <br>";
$sum = 0;
for($i=0;$i<$var2;$i++){   // for loop
    $sum += $var1[$i]; 
}
echo "Sum of the array is ",$sum, "<br>";

echo "While Loop <br>";
$j=0;
$big_number = $var1[0];
while($j<$var2){               // While Loop
    if($var1[$j]>$big_number){
        $big_number = $var1[$j];
    }
    $j++;
}
 echo "Biggest number of the array is ",$big_number,"<br>";

echo "<br>";
echo "Do-While loop <br>";
$x =0;
$squire_sum =0;
do{                                  //Do-While loop
    $squire_sum += $var1[$x]**2;
    $x++;
}while($x<$var2);
echo "Squred Sum of the array is ",$squire_sum, "<br>";
echo "<br>";
echo "Foreach loop <br>";
$c=0;
foreach($var1 as $i){              // Foreach loop
    echo "Value of index $c is $i<br>";
    $c++;
}


?>