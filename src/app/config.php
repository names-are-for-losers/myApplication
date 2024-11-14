<?php
$host = 'localhost';  // or '127.0.0.1'
$db = 'my_database';
$user = 'root';       // Your MySQL username
$pass = '';           // Your MySQL password

// Create a new connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}