<?php
require_once __DIR__. "/../../models/reservationModel.php";
$Id=$_GET['Id'];
$sql="DELETE FROM reservation WHERE Id=$Id";
if(getReservationById($Id)){
    echo "Reservation deleted successfully.";
}
 else {
    echo "Error";
}
?>