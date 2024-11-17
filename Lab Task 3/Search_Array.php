<?php

$array = [2, 24, 70, 18, 1];
$x = 19;
$bool= false;

for($i=0; $i<count($array);$i++){
    if($array[$i]==$x){
        echo"The element $x is found in the array"; 
        $bool=true;
    }
}
if($bool==false){
    echo"The element $x is not found in the array"; 
}

?>