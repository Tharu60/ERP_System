<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'assignment';

// Create a connection
$conn = mysqli_connect($host, $username, $password, $database);

// Checking the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>