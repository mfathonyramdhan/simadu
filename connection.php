<?php
// Database configuration
// $host = 'localhost'; // Replace with your database host
// $username = 'n1669549_simadu_admin'; // Replace with your database username
// $password = 'simadu_admin'; // Replace with your database password
// $database = 'n1669549_simadu'; // Replace with your database name

$host = 'localhost'; // Replace with your database host
$username = 'root'; // Replace with your database username
$password = ''; // Replace with your database password
$database = 'n1669549_simaduv2'; // Replace with your database name


// Create a database connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}
