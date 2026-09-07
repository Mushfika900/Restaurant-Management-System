<?php
require_once __DIR__."/../config/database.php";

function getOrders(){
    global $connection;
    $sql="SELECT * FROM orders";

    return mysqli_query($connection,$sql);
}

?>