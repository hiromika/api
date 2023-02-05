<?php

$servername = "127.0.0.1";
$username = "farahardi";
$password = "FarahHardi@213";
$dbname = "farahardi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo $conn->connect_error;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $kom = $_POST['kom'];

    $sql = "INSERT INTO users (Nama, Kom) VALUES ('$name', '$kom')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}else{
    $sql = "SELECT Nama, Kom, createdAt FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo json_encode($result->fetch_assoc());
    } else {
        echo "0 results";
    }
}
?>