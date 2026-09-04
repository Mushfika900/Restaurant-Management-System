<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="css/reservation.css">
</head>
<body>
    <nav>
        <h2>TasteBite</h2>

        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="reservation.php">Reservation</a></li>
        </ul>
    </nav>
    <section class="reservation" id="reservation">
    <h2>Make a reservation</h2>
    <form class="reservation" method="POST" action="../../controllers/reservationControl.php">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="date" name="date" required>
        <input type="time" name="time" required>
        <input type="number" name="guests" placeholder="Number of Guests" min="1" required>
        <textarea name="message" placeholder="Your Message" rows="4"></textarea><br>
        <button type="submit">Book Table</button>
    </form>
</section>
</body>
</html>