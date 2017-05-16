<?php
$servername = "localhost";
//$username = "parasbaz_grocmit";
//$password = "!tInA^%4kc;p";
$username = "root";
$password = "";
$dbname = "jetr_details";

/*$servername = "localhost";
$username = "grocmitr_mitra";
$password = "uL8g_NU+**W-";
$dbname = "grocmitr_mitra";*/

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>