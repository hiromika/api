<?php

include('conn.php');

$name = $_POST['name'];
$kom = $_POST['kom'];

$sql = "INSERT INTO users (Nama, Kom) VALUES ('$name', '$kom')";

if ($conn->query($sql) === TRUE) {
  return "New record created successfully";
} else {
  return "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>