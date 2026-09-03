<?php
require_once '../../config/database.php';
$item = $_GET['item'];
$price = $_GET['price'];

if(isset($_POST['quantity'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method'];
    $quantity = $_POST['quantity'];
    $total_price = $price * $quantity;
    $sql="INSERT INTO orders(customer_name,phone,address,item_name,price,quantity,total_price,payment_method) VALUES ('$name','$phone','$address','$item','$price','$quantity','$total_price','$payment_method')";
    if(mysqli_query($connection,$sql)){
    header("Location: order_done.php");
} }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="css/order.css">
</head>
<body>
    <div class="order-box">

    <h2>Your Order</h2>

    <div class="order-summary">
        <p>Item: <?php echo $item; ?></p>
        <p>Price: BDT <?php echo $price; ?></p>
    </div>

    <form method="POST">

        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Phone:</label>
        <input type="text" name="phone" required>

        <label>Address:</label>
        <input type="text" name="address" required>

        <label>Payment Method:</label>
        <select name="payment_method" required>
            <option value="">Select Payment Method</option>
            <option value="Cash on Delivery">Cash on Delivery</option>
            <option value="Online Payment">Online Payment</option>
        </select>

        <label>Quantity:</label>
        <input type="number" name="quantity" min="1" value="1">

        <button type="submit">Place Order</button>

    </form>

</div>
</body>
</html>