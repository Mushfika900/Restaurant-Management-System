<?php

require_once __DIR__."/../config/database.php";

function addReservation($Name,$Email,$Phone,$Date,$Time,$Guests,$Message){
    global $connection;
    $sql="INSERT INTO reservation(Name,Email,Phone,Date,Time,Guests,Message) VALUES('$Name','$Email','$Phone','$Date','$Time','$Guests','$Message')";
    return mysqli_query($connection,$sql);
}

function getReservation(){
    global $connection;
    $sql="SELECT * FROM reservation";
    return mysqli_query($connection,$sql);
}

function updateReservation($Id,$Name,$Email,$phone,$Date,$Time,$Guests,$Message){
    global $connection;
    $sql="UPDATE reservation SET Name='$Name',Email='$Email',Phone='$phone',Date='$Date',Time='$Time',Guests='$Guests',Message='$Message' 
    WHERE Id=$Id";
    return mysqli_query($connection,$sql);
}

function getReservationById($Id){
    global $connection;
    $sql="SELECT * FROM reservation WHERE Id=$Id";
    return mysqli_query($connection,$sql);
}

function deleteReservation($Id){
    global $connection;
    $sql="DELETE FROM reservation WHERE Id=$Id";
    return mysqli_query($connection,$sql);
}
?>