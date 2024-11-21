<?php

$email = $_GET["email_input"];

$check = strpos($email , ".com");

if(empty($email)){
    echo"Email can't be empty";
}

else if($check == null){
    echo" Invalid email!";
}
else{
    echo "Email: " . $email . "";
}

?>