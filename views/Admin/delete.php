<?php
require_once __DIR__. "/../../models/reservationModel.php";
$Id=$_GET['Id'];
if(deleteReservation($Id)){
    header("Location: reservation.php");
    exit();
}
 else {
    echo "Error";
}
?>