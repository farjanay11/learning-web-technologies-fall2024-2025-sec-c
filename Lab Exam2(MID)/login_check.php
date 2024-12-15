<?php

session_start();

if(isset($_POST["submit"])){
 $login_id = $_POST["id"];
 $login_password = $_POST["password"];


   foreach($_SESSION['users'] as $user){
      if(empty($login_id) || empty($login_password)){
         echo "Username or password can not be empty";
         break;
      }
      else if($login_id === $user['id'] && $login_password === $user["pass"]){
         $_SESSION["status"] = true;
         header("location: admin_home.php");
         break;
      }
      else{
     echo "username and password is not valid";
     break;
      }
   }
}
else{
    header("location:login.html");
}

?>