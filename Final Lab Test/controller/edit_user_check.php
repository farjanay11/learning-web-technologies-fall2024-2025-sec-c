<?php
require_once("../model/user_model.php");
$old_username = $_REQUEST['old_username'];
$new_username = $_REQUEST['new_username'];
$new_password = $_REQUEST['new_password'];

$result = change_user($old_username, $new_username, $new_password);
if($result == true){
    echo "User Details Updated";
}
else{
    echo "Failed!";
}


?>