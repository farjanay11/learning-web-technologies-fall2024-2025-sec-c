<?php

function getConnection(){
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'check');
    return $conn;
}


function login($id, $password){
    $conn = getConnection();
    $sql = "select * from first_check where id = '{$id}' and password = '{$password}'";
    $result = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($result);
    if(isset($user['type'])){
        return $user['type'];
    }
    else{
    return false;
    }
}
function addUser($name, $password, $id, $email, $type){
    $conn = getConnection();
    $sql = "insert into first_check values ('$name', '$password', '$id', '$email', '$type')";
    $result = mysqli_query($conn, $sql);
    if($result){
        return true;
    }
    else{
        return false;
    }
}

function user_info($id){
    $conn = getConnection();
    $sql = "select * from first_check where id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}


?>