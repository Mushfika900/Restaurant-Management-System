<?php
require_once __DIR__."/../models/reservationModel.php";

$reservation=getReservation();

if(isset($_POST['update'])){
    $Id=$_POST['Id'];
    $Name=$_POST['name'];
    $Email=$_POST['email'];
    $phone=$_POST['phone'];
    $Datee=$_POST['date'];
    $Time=$_POST['time'];
    $Guests=$_POST['guests'];
    $Message=$_POST['message'];

    if(updateReservation($Id,$Name,$Email,$phone,$Datee,$Time,$Guests,$Message)){
        header("Location:../views/Admin/reservation.php");
        exit();
    } 
    else {
        echo "Error updating reservation.";
    }

}

?>