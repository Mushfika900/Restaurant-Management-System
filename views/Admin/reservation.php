<?php
require_once __DIR__."/../../controllers/reservationControl.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation list</title>
</head>
<body>
    <h1>Admin Dashboard</h1>
    <h2>Reservation List:</h2>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Guests</th>
                <th>Message</th>
                <th>Actions</th>
              </tr>
    
            <?php 
            while($row = mysqli_fetch_assoc($reservation)) {

             ?>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td><?php echo $row['Phone']; ?></td>
                <td><?php echo $row['Date']; ?></td>
                <td><?php echo $row['Time']; ?></td>
                <td><?php echo $row['Guests']; ?></td>
                <td><?php echo $row['Message']; ?></td>
                <td>
                    <a href="update.php?Id=
                    <?php echo $row['Id']; 
                    ?>">Update</a>
                    <a href="delete.php?Id=
                    <?php echo $row['Id']; 
                    ?>">Delete</a>
                </td>
            </tr>
            <?php 
            }
             ?>
    </table>

</body>
</html>