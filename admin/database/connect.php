<?php
// Database connection parameters
$servername = "localhost"; // Change this to your database server hostname
$username = "u439266352_root"; // Change this to your database username
$password = "!ARJ?j&Mui0"; // Change this to your database password
$database = "u439266352_rvm"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "";
?>