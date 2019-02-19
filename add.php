<?php

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

    if ($conn->query($sql) === TRUE) {

    } 
        else {
        echo "Table not created";
    }


// Initializing the variables

    $name = "";
    $surname = "";
    $hotel = "";
    $checkin = "";
    $checkout = "";
    $price = "";



if (isset($_POST['submit'])) {

    $name = $_POST['username'];
    $surname = $_POST['surname'];
    $hotel = $_POST['hotelname'];
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];
    $date1 = strtotime($_POST['check-in']);
    $date2 = strtotime($_POST['check-out']);

    // SWITCH STATEMENT == THE HOTEL PRICES

    switch ($hotel) {
        case ($hotel == "Crystal Hotel"):
        $price = 500;
        break;

        case ($hotel == "Cape Lodge"):
        $price = 800;
        break;

        case ($hotel == "Hotel Cezar"):
        $price = 850;
        break;

        case ($hotel == "Presidente"):
        $price = 10000;
        break;
    }

    // CALCULATIONS

    // CALCULATING THE AMOUNT OF NIGHTS
    $interval = abs($date1 - $date2);

    $years = floor($interval / (364*60*60*24));
    $months = floor(($interval - $years *365*60*60*24) / (30*60*60*24));
    $days = floor(($interval - $years *365*60*60*24 - $months *30*60*60*24) / (60*60*24));

    // CALCULATING THE PRICE OF STAY

    $TotalCost = $price * $days;
    
    // INSERTING USER DATA INTO THE TABLE

    $sql = "INSERT INTO users( UserName, UserSurname, Hotelname, Arrival, Departure) VALUES ('$name', '$surname', '$hotel', '$checkin', '$checkout')";

    if ($conn->query($sql) ===TRUE) {};
}


?>