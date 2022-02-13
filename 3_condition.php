<?php
echo "Conditional program<br>";
$var1 =8;
$var2 = 9;
$var3 = 4;
//if else
echo "<br> If-else<br>";
if($var1>$var2){
    echo "Variable 1 is maximum.<br>";
}
else{
    echo "Variable 2 is maximum.<br>";
}
//if elseif
echo "<br> if elseif<br>";
if($var2<$var3){
    echo "Variable 2 is minimum.<br>";
}
elseif($var2>$var3){
    echo "Variable 3 is minimum.<br>";
}
else{
    echo "Both are equal.<br>";
}

?>