<?php
// Connect to the database (replace with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";
// $servername = "sql210.infinityfree.com";
// $username = "if0_36712441";
// $password = "Akshu636";
// $dbname = "if0_36712441_travel";

// $conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if($conn) {
    echo"";
}   else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
