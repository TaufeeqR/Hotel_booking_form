<?php

include_once 'user.php';

// CREATE THE CONNECTION

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME); 

// CHECK THE CONNECTION

if ($conn->connect_error) {
    die ("Connection failed: " . $conn->connect_error);
} 


?>