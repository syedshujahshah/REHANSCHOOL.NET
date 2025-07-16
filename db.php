<?php
$servername = "localhost";
$username = "ulnrcogla9a1t";
$password = "yolpwow1mwr2";
$dbname = "db920zcmuxeev3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset to utf8
$conn->set_charset("utf8");

// Optional: Display success message (remove in production)
// echo "Connected successfully to database: " . $dbname;
?>
