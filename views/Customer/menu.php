<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Menu TasteBite</title>

    <link rel="stylesheet" href="css/menu.css">
</head>

<body>

    <nav>
        <h2>TasteBite</h2>

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="reservation.php">Reservation</a></li>
        </ul>
    </nav>
    
    <!-- Search -->
    <section class="menu">
      <h1>Our Menu</h1>
        <form method="GET">
        <input type="text"name="search" placeholder="Search Burger, Pizza,Pasta,Sandwitch,Fried Chicken,Juice,Coffee,Cake or French Fries" required>
        <button type="submit">Search</button>
        </form>
        <?php
        if(isset($_GET["search"]))
            {
                $search=$_GET["search"];
                echo "You searched for: ".$search;
            }
        ?>

        <!-- Burger -->
        <div class="menu-container">
            <div class="menu-card">
                <img src="images/burger.jpg" alt="Chicken Cheese Burger">
                <h3>Chicken Cheese Burger</h3>
                 <p>
                    Juicy chicken burger with fresh vegetables and cheese.
                </p>

                <span>BDT 400</span>

                <br><br>

                <a href="order.php?item=Chicken%20Cheese%20Burger&price=400" class="btn">Order Now</a>

            </div>


            <!-- Pizza -->
            <div class="menu-card">
                <img src="images/pizza.jpg" alt="Italian Pizza">

                <h3>Italian Pizza</h3>

                <p>
                    Freshly baked pizza with cheese, tomato and herbs.
                </p>

                <span>BDT 800</span>

                <br><br>

                <a href="order.php?item=Italian%20Pizza&price=800"
                   class="btn">
                    Order Now
                </a>

            </div>


            <!-- Pasta -->
            <div class="menu-card">
                <img src="images/pasta.jpg" alt="Creamy Pasta">

                <h3>Creamy Pasta</h3>

                <p>
                    Delicious creamy pasta prepared with fresh ingredients.
                </p>

                <span>BDT 550</span>

                <br><br>

                <a href="order.php?item=Creamy%20Pasta&price=550"
                   class="btn">
                    Order Now
                </a>

            </div>


    <div class="menu-card">
       <img src="images/chicken.jpg" alt="Crispy Fried Chicken">

       <h3>Crispy Fried Chicken</h3>

       <p>
        Crispy and juicy fried chicken served with special sauce.
       </p>

       <span>BDT 450</span>

       <br><br>
       <a href="order.php?item=Crispy Fried Chicken&price=450" class="btn">
        Order Now
    </a>

  </div>


    <!-- Sandwich -->
    <div class="menu-card">
        <img src="images/sand.jpg" alt="Club Sandwich">

        <h3>Club Sandwich</h3>

        <p>
            Fresh sandwich with vegetables,
            cheese and special sauce.
        </p>

        <span>BDT 350</span>

        <br><br>
        <a href="order.php?item=Club Sandwich&price=350" class="btn">
            Order Now
        </a>
    </div>

    <!-- French Fries -->
    <div class="menu-card">
        <img src="images/french.jpg" alt="French Fries">

        <h3>French Fries</h3>

        <p>
            Crispy golden french fries
            served with tomato ketchup.
        </p>

        <span>BDT 200</span>

        <br><br>

        <a href="order.php?item=French Fries&price=200" class="btn">
            Order Now
        </a>
    </div>


    <!-- Mango Juice -->
    <div class="menu-card">
        <img src="images/mango.jpg" alt="Mango Juice">

        <h3>Mango Juice</h3>

        <p>
            Refreshing mango juice made
            with sweet ripe mangoes.
        </p>

        <span>BDT 180</span>

        <br><br>

        <a href="order.php?item=Mango Juice&price=180" class="btn">
            Order Now
        </a>
    </div>


    <!-- Orange Juice -->
    <div class="menu-card">
        <img src="images/orange.jpg" alt="Orange Juice">

        <h3>Fresh Orange Juice</h3>

        <p>
            Fresh orange juice prepared
            and served chilled.
        </p>

        <span>BDT 180</span>

        <br><br>

        <a href="order.php?item=Fresh Orange Juice&price=180" class="btn">
            Order Now
        </a>
    </div>


    <!-- Cold Coffee -->
    <div class="menu-card">
        <img src="images/cold coffee.jpg" alt="Cold Coffee">

        <h3>Cold Coffee</h3>

        <p>
            Chilled creamy coffee with
            a smooth and rich flavor.
        </p>

        <span>BDT 220</span>

        <br><br>

        <a href="order.php?item=Cold Coffee&price=220" class="btn">
            Order Now
        </a>
    </div>


    <!-- Cake -->
    <div class="menu-card">
        <img src="images/cake.jpg" alt="Chocolate Cake">

        <h3>Chocolate Cake</h3>

        <p>
            Soft chocolate cake topped
            with rich chocolate cream.
        </p>

        <span>BDT 250</span>

        <br><br>

        <a href="order.php?item=Chocolate Cake&price=250" class="btn">
            Order Now
        </a>
    </div>
</div>
     </div>

    </section>

</body>

</html>