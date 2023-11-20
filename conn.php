<?php

$host = "localhost";
$username = "username";
$password = "";
$database = "umnsi";

$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Connection successful
echo "Connected successfully";

// Close the database connection
$conn->close();

?>
