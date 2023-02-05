<?php
include('conn.php');

$sql = "SELECT Name, Kom, createdAt FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    return json_encode($result->fetch_assoc());
} else {
    return "0 results";
}

$conn->close();
?>