<?php

$hostname = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "apartment_booking_db"; 

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 

// echo "Database connection is OK<br>"; 

?>