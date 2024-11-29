<?php
$host = "localhost"; // Host name (localhost)
$user = "root"; // MySQL username (default is root)
$password = ""; // MySQL password (default is empty)
$database = "grocery_store"; // Database name (change if different)

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
