<?php
$servername = "localhost";
$username = "farahardi";
$password = "FarahHardi@213";
$dbname = "farahardi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>