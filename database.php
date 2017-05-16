<?php
$servername = "localhost";

$username = "jetr_root";
$password = "admin@123";
$dbname = "jetr_jetrApp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>