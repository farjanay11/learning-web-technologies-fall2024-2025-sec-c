<?php

if (isset($_GET["gender_input"])) {  
    $gender = $_GET["gender_input"];
    echo "Gender: " . $gender . "";
} 

else {
    echo "At least one of them must be selected!";
}

?>
