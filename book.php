<?php

// INCLUDING THE REQUIRED FILE/S

include_once 'connect.php';
include_once 'add.php';

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
                <input type="text" name="username" class="firstname" required>
                <br>
                Surname:<br>
                <input type="text" name="surname" class="surname" required>
                
                <div class="hotel-drpdwn">
                    <h2>Select Your Hotel</h2>
                    <select name="hotelname" required>
                        <option name="" value=""</option>
                        <option name="" value="Crystal Hotel">Crystal Hotel and Spa</option>
                        <option name="" value="Cape Lodge">Cape Lodge Hotel</option>
                        <option name="" value="Hotel Cezar">Hotel Cezar</option>
                        <option name="" value="Presidente">Presidente Hotel</option>
                    </select>
                </div>

                <div class="nights">
                    <div class="check-in" >
                        <h3>Check In</h3>
                        <input type="date" name="check-in" required>
                    </div>

                    <div class="check-out" >
                        <h3>Check Out</h3>
                        <input type="date" name="check-out"required>
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
                        echo "Hello $name $surname, <br>you booked the $hotel <br>from the <br> $checkin <br>until the <br> $checkout for $days nights <br> for the price of <br>R$TotalCost" . '<br><a href="index.php">Return to Home</a> <br><a href="book.php">Make another booking</a>' ;
                    } 
                    // else {
                    //     $sql = "SELECT * FROM users where (UserName = '$name' AND UserSurname = '$surname' AND Hotelname = '$hotel' AND Arrival ='$checkin' AND Departure = '$checkout')";

                    //     $duperaw = $conn->query($sql);

                    //     if (mysqli_num_rows($duperaw) > 1) {
                    //         echo 'Error! Booking already made.';
                    //     }
                    // }
                    
                    ?>
                    </div>
                </div>
            </div>
<!-- END OF MAIN CONTAINER -->

    </body>
</html>