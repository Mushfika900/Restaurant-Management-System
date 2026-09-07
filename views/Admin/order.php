<?php
require_once __DIR__."/../../controllers/orderControl.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
</head>
<body>
    <h2>Order List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Payment Method</th>
        </tr>

        <?php 
        while($row=mysqli_fetch_assoc($orders)){?>
        <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['customer_name'];?></td>
           <td><?php echo $row['phone'];?></td>
           <td><?php echo $row['address'];?></td>
           <td><?php echo $row['item_name'];?></td>
           <td><?php echo $row['price'];?></td>
           <td><?php echo $row['quantity'];?></td>
           <td><?php echo $row['total_price'];?></td>
           <td><?php echo $row['payment_method'];?></td>
        </tr>

        <?php
        }
        ?>
    </table>
</body>
</html>