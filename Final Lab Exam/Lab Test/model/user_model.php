<?php
function get_connection(){

    $conn = mysqli_connect("127.0.0.1", "root", "", "crud" );
    return $conn;
}

function add_user($ename, $cname, $number, $uname, $password)
{
    $conn = get_connection();
    $sql = "insert into user values ('$ename', '$cname', '$number','$uname', '$password')";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function login($uname, $password){
    $conn = get_connection();
    $sql = "select * from user where uname = '{$uname}' and password = '{$password}'";
    $result = mysqli_query($conn, $sql);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        return true;
    }
    else{
        return false;
    }
}

function show_users(){
    $conn = get_connection();
    $sql = "select * from user";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function user_info($uname){
    $conn = get_connection();
    $sql = "select * from user where uname = '$uname'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
    return $row; 
}

function change_user($old_name, $new_name, $new_password, $new_email, $new_age){
    $conn = get_connection();
    $sql = "update user set name = '$new_name', password = '$new_password' , email  = '$new_email', age = '$new_age' where name = '$old_name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete_user($name){
    $conn = get_connection();
    $sql = "delete from user where name = '$name'";
    $result = mysqli_query($conn, $sql);
    return $result;
}


?>