<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Booking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../css/book.css"/>
        <script src="main.js"></script>
    </head>
    <body>

    <!-- Navbar for the bookings page below -->

        <div class="navbar">
            <a href="book.php">Book Now!</a>
            <a href="register.php">Register</a>
            <a href="login.php" >Sign In</a>
            <a href="index.php" class="hero">
                <img src="" alt="logo">
            </a>
        </div>

        <!-- Main header for the page -->

        <div class="header">
            <h1 class="heading">
                Book Your Ideal Hotel
            </h1>
        </div>

        <!-- Main container with booking content below -->

        <div class="grid-container">
            <div class="grid">
                <div class="hotel-drpdwn">
                    <h2>Select Your Hotel</h2>
                    <select name="hotel-list">
                        <option name="hotel-one" value="">Crystal hotel and Spa</option>
                        <option name="hotel-two" value="">Cape Lodge Hotel</option>
                        <option name="hotel-three" value="">Hotel Cezar</option>
                        <option name="hotel-four" value="">Presidente Hotel</option>
                    </select>
                </div>

                <div class="check-in">
                    <h2>Check In</h2>
                    <select name="hotels">
                        <option value=""></option>
                    </select>
                </div>

                <div class="check-out">
                    <h2>Check Out</h2>
                    <select name="hotels">
                        <option value=""></option>
                    </select>
                </div>
            </div>

            <div class="grid">
                <div class="hero-image">
                    <img src="img/cDr2JGj.jpg" alt="logo">
                </div>
            </div>
        </div>

    </body>
</html>