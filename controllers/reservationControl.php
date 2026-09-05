<?php
require_once __DIR__."/../models/reservationModel.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Phone = $_POST["phone"];
    $Date = $_POST["date"];
    $Time = $_POST["time"];
    $Guests = $_POST["guests"];
    $Message = $_POST["message"];

    if (addReservation($Name, $Email, $Phone, $Date, $Time, $Guests, $Message)) {
        
    } else {
        echo "Error adding reservation.";
    }
}
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
        echo "Reservation updated successfully.";
    } else {
        echo "Error updating reservation.";
    }
}
$reservation = getReservation();
?>