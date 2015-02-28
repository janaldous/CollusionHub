<?php
$servername = "mysql12.000webhost.com";
$username = "a1331560_shubham";
$password = "Increed123";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>