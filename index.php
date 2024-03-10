<?php

echo "Hello World!";

$host = 'localhost';
$username = 'your_database_username';
$password = 'your_database_password';
$database = 'your_database_name';

// Create connection
$conn = new mysqli($host, $username, $password, $database);

$user_id = $_GET['id'];
// Unsafe SQL query without using prepared statements or parameterized queries
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
