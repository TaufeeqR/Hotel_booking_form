<?php

include_once 'user.php';

// CREATE CONNECT VARIABLE

$conn = new mysqli (DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHECK THE CONNECTION 

if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
}
    echo "Connection Successful.";

    // Posting to the database

    $Username = $_POST['Username'];
    $Password = $_POST['Password_1']

    $sql = INSERT INTO users (Username, Email, Password) VALUES ('Username', 'Email', 'Password_1');

?>