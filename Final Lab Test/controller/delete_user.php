<?php
require_once("../model/user_model.php");
$uname = $_REQUEST['uname'];

$result = delete_user($uname);

if($result){
    echo "delete succesfull";
}
else{
    echo "problem in deleting user";
}


?>

