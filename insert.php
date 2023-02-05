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


$name = $_POST['name'];
$kom = $_POST['kom'];

$sql = "INSERT INTO users (Nama, Kom) VALUES ('$name', '$kom')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>