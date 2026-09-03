<?php
require_once "../../config/database.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
$name=$_POST["name"];
$email=$_POST["email"];
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "<span style='color:red;'>Invalid email format</span>";
    exit;
}
$phone=$_POST["phone"];
if(!preg_match("/^[0-9]{11}$/",$phone)){
    echo "<span style='color:red;'>Invalid phone number format</span>";
    exit;
}
$date=$_POST["date"];
if($date<date("Y-m-d")){
    echo "<span style='color:red;'>Please select a future date</span>";
    exit;
}
$time=$_POST["time"];
$guests=$_POST["guests"];
$message=$_POST["message"];

$sql="INSERT INTO reservation(Name,Email,Phone,Date,Time,Guests,Message) VALUES ('$name','$email','$phone','$date','$time','$guests','$message')";
if(mysqli_query($connection,$sql)){
    echo "Reservation successful.";
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
} 

 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TasteBite Restaurant</title>

    <link rel="stylesheet" href="css/style.css">
    
</head>

<body>
    <nav>
        <h2>TasteBite</h2>

        <ul>
            
            <li><a href="home.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="reservation.php">Reservation</a></li>
            <li><a href="about.php">About</a></li>
            



        </ul>
    </nav>
    <section class="rest">

        <div class="rest1">
            <h1>Delicious Food,<br>Enjoy your Moments</h1>

            <p>
                Enjoy fresh and delicious food at TasteBite Restaurant.
            </p>

            <a href="menu.php" class="btn">Explore Menu</a>
            <a href="reservation.php" class="btn">Book a Table</a>
        </div>

    </section>

    <!-- <section class="menu" id="menu">
        <h2>Our Popular Menu</h2>
        <div class="menu-container">
           <div class="menu-card">
            <h3>Chicken Cheese Burger</h3>
            <p>Juicy chicken burger with fresh vegetables and cheese.</p>
            <span>BDT 400</span>
           </div> 

        <div class="menu-card">
            <h3>Italian Pizza</h3>
            <p>Freshly baked pizza with cheese, tomato and herbs.</p>
            <span>BDT 800</span>
           </div>
           
        <div class="menu-card">
            <h3>Creamy Pasta</h3>
            <p>Delicious creamy pasta prepared with fresh ingredients.</p>
            <span>BDT 550</span>
           </div> 

        </div>
    </section>
    

<!------------About--------------->

<!-- <section class="about" id="about">
    <div class="about-text">
        <h2>About TasteBite</h2>
        <p>
            TasteBite is a restaurant dedicated to serving delicious and fresh food in a clean and comfortable environment.
        </p>
        <p>
            Our goal is to provide best food in town,friendly service and memorable moments for every customers.
        </p>
    </div>

</section> -->

<!---------Reservation------>

<!-- <section class="reservation" id="reservation">
    <h2>Make a reservation</h2>
    <form class="reservation" method="POST" action="controllers/reservation_controller.php">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="phone" placeholder="Phone Number" required>
        <input type="date" name="date" required>
        <input type="time" name="time" required>
        <input type="number" name="guests" placeholder="Number of Guests" min="1" required>
        <textarea name="message" placeholder="Your Message" rows="4"></textarea><br>
        <button type="submit">Book Table</button>
    </form>
</section> -->

<!---------Contact---------->

<!-- <section class="contact" id="contact">
    <h2>Contact Us</h2>
    <form class="contact-form" method="POST">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <input type="text" placeholder="Subject" required>
        <textarea placeholder="Your Message" rows="6" required></textarea><br>
        <button type="submit">Send Message</button>

    </form>

</section> -->
    <script src="js/script.js" defer></script>
   <footer>
        <p>
            &copy; 2023 TasteBite. All rights reserved.
        </p>
    </footer>
</body>
</html>