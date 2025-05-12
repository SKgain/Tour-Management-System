<?php
$host = "localhost";
$dbname = "tourdb";
$username = "root";
$password = ""; // Change this if needed

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<script>alert('❌ Database connection failed: " . $conn->connect_error . "');</script>");
}
?>
