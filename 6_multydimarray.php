<?php
echo "Welecome To multidimensional Array.<br>";
$ashif = array(array(1,4,6,7),
array(3,9,6,2),
array(9,2,4,6));
echo "Printing specific position of an array.<br>";
echo $ashif[1][2].'<br>';
echo "Printing full array array.<br>";
for($i=0;$i<count($ashif);$i++){
    for($j=0;$j<count($ashif[$i]);$j++){
        echo $ashif[$i][$j].' ';
    }
    echo'<br>';
}
?>