<?php

$name = $_GET["name_input"];

$condition_d = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRUSTUVWXYZ.- ";
$check = true;

for ( $i = 0; $i < strlen($name); $i++){
    for ($j = 0; $j < strlen($condition_d); $j++){
        if($name[$i] == $condition_d[$j]){
            $check = true;
            break;
        }
        else{
            $check = false;
        }
    }
    if($check == false){
        break;
    }
}


if (empty($name)){
    echo "Your username can not be empty";
}
else if((strpos($name, " ") == false)){
    echo "Username must contains at least two words";
}
else if(is_numeric($name[0])){
    echo "Username must statrt with a letter";
}
else if($check == false){
    echo "Username can only contain a-z, A-Z, period , dash ";
}
else{
    echo "NAME: " . $name . "";
}

?>