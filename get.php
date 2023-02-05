<?php
$servername = "localhost";
$username = "farahardi";
$password = "FarahHardi@213";
$dbname = "farahardi";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "farahardi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT Nama, Kom, createdAt FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo "0 results";
}

$conn->close();
?>