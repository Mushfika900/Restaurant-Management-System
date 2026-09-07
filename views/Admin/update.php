<?php
require_once __DIR__. "/../../controllers/reservationControl.php";
$Id=$_GET['Id'];
$result=getReservationById($Id);
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservation</title>
</head>
<body>
    <h2>Update Reservation</h2>
    <form method="POST" action="/Tastebite/controllers/reservationControl.php">
        <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $row['Name']; ?>" required><br>
        <label for="email">Email:</label> 
        <input type="email" name="email" value="<?php echo $row['Email']; ?>" required><br>
        <label for="phone">Phone:</label>
        <input type="text" name="phone" value="<?php echo $row['Phone']; ?>" required><br>
        <label for="date">Date:</label> 
        <input type="date" name="date" value="<?php echo $row['Date']; ?>" required><br>
        <label for="time">Time:</label>
        <input type="time" name="time" value="<?php echo $row['Time']; ?>" required><br>
        <label for="guests">Guests:</label>
        <input type="number" name="guests" value="<?php echo $row['Guests']; ?>" required><br>
        <label for="message">Message:</label>
        <textarea name="message" required><?php echo $row['Message']; ?></textarea><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>


