<?php
$servername = "localhost"; // Change to your MySQL server if needed
$username = "root";        // Your database username
$password = "";            // Your database password
$dbname = "user_db";       // The database name you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
