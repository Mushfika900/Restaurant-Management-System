<?php
require_once "../config/database.php";

function login($email,$password){
    global $connection;

    $sql="SELECT * FROM users WHERE email='$email'";
    $result=mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)==1){
        $user=mysqli_fetch_assoc($result);
        if(password_verify($password,$user["password"])){
            return $user;
        }
    }
    return false;
}

?>