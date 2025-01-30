<?php
$servername = "localhost";
$username = "root"; // your database username
$password = ""; // your database password (default for local MySQL is an empty string)
$dbname = "yourgroupnumber_shareride_db"; // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
