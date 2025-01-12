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

function change_user($old_username, $new_username, $new_password){
    $conn = get_connection();
    $sql = "update user set uname = '$new_username', password = '$new_password' where uname = '$old_username'";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function delete_user($uname){
    $conn = get_connection();
    $sql = "delete from user where uname = '$uname'";
    $result = mysqli_query($conn, $sql);
    return $result;
}


?>