<?php


if(isset($_GET["bg_input"])){
    $bg = $_GET["bg_input"];
    echo "BG: " . $bg."";
}
else{
    echo "Must be selected!";;
}

?>