<?php
$server = "localhost";  // Usually "localhost"
$username = "root";     // Your MySQL username (default is "root" for XAMPP)
$password = "Pratap*1";         // Your MySQL password (default is empty for XAMPP)
$database = "user_db";  // The database name

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
