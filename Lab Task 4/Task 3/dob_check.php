<?php

$day = $_GET["day_input"];
$month = $_GET["month_input"];
$year = $_GET["year_input"];

$checkday = false;
for($i=1; $i<=31; $i++){
    if($day== $i){
        $checkday = true;
        break;
    }
}

$checkmonth =false;
for($i=1; $i<=12; $i++){
    if($month == $i){
        $checkmonth =true;
        break;
    }
}

$checkyear = false;
for($i=1953; $i<=1998; $i++){
    if($year == $i){
        $checkyear= true;
        break;
    }
}

if(empty($day) || empty($month) || empty($year) ){
    echo"Can't be empty!";
}

else if($checkday == false){
    echo"Must be valid number(dd:1-31)";
}

else if($checkmonth == false){
    echo"Must be valid number(mm:1-12)";
}

else if($checkyear == false){
    echo"Must be valid number(yy:1953-1998)";
}

?>