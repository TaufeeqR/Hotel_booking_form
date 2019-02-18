<?php

// INCLUDING THE REQUIRED FILE/S

include_once 'connect.php';

// CREATE VARIABLE

$sql = "CREATE TABLE IF NOT EXISTS users(
    id INT(8) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    UserName VARCHAR(64) NOT NULL,
    UserSurname VARCHAR(64) NOT NULL,
    Hotelname VARCHAR(64) NOT NULL,
    Arrival VARCHAR(64) NOT NULL,
    Departure VARCHAR(64) NOT NULL)";

// CHECK THE QUERY

    if ($conn->query($sql) === TRUE) {} 
        else {
        echo "Table not created";
    }


// Initializing the variables

    $name = "";
    $surname = "";
    $hotel = "";
    $checkin = "";
    $checkout = "";



if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $surname = $_POST['surname'];
    $hotel = $_POST['hotelname'];
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];


    $sql = "INSERT INTO users( UserName, UserSurname, Hotelname, Arrival, Departure) VALUES ('$name', '$surname', '$hotel', '$checkin', '$checkout')";

    if ($conn->query($sql) ===TRUE) {
    } else {
        echo "Error: " .$sql ."<br>" . $conn->error;
    }
}

?>

<!-- HTML DOCUMENT BELOW WITH FORM -->

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
            <a href="index.php">Home</a>
        </div>

        <!-- Main header for the page -->

        <div class="header">
            <h1 class="heading">
                Book A Hotel
            </h1>
        </div>

        <!-- Main container with booking content below -->

        <div class="grid-container">
            <div class="grid">
                <form action="book.php" method="post">
        
                First Name:<br>
                <input type="text" name="username">
                <br>
                Surname:<br>
                <input type="text" name="surname">
                
                <div class="hotel-drpdwn">
                    <h2>Select Your Hotel</h2>
                    <select name="hotelname">
                        <option name="" value="Crystal Hotel">Crystal Hotel and Spa</option>
                        <option name="" value="Cape Lodge">Cape Lodge Hotel</option>
                        <option name="" value="Hotel Cezar">Hotel Cezar</option>
                        <option name="" value="Presidente">Presidente Hotel</option>
                    </select>
                </div>

                <div class="nights">
                    <h2>Number of nights</h2>
                    <div class="check-in" >
                        <h3>Check In</h3>
                        <input type="date" name="check-in">
                    </div>

                    <div class="check-out" >
                        <h3>Check Out</h3>
                        <input type="date" name="check-out">
                    </div>
            </div>

                <button class="button" name="submit"><span>Book Now!</span></button>

                </form>
                <!-- END OF THE FORM -->
            
            </div>

<!-- CONTAINER WHICH DISPLAYS THE BOOKING MADE BY THE USER -->

                <div class="grid">
                    <div class="display">
                    <?php if (isset($_POST['submit'])) {
                        echo "Hello $name $surname, <br>you booked the $hotel <br>from the <br>$checkin <br>until the <br>$checkout";
                    } ?>
                    </div>
                </div>
            </div>
<!-- END OF MAIN CONTAINER -->

    </body>
</html>