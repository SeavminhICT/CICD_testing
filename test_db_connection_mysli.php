<?php
$servername = "localhost"; // Your server name, often "localhost"
$username = "root"; // Your MySQL username
$password = "yourpassword"; // Your MySQL password
$dbname = "test";   // The database you want to connect to

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    // If connection fails, display error and stop script execution
    die("❌ Connection failed: " . $conn->connect_error);
}

// If connection succeeds, display success message
echo "✅ Connected to the database successfully!";

// Close the connection
$conn->close();

?>