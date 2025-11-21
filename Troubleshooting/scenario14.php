<?php
$conn = mysqli_connect("localhost","root","","class_db");

$data = $_POST;

$stmt = $conn->prepare("INSERT INTO students (first_name, last_name, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $data['first_name'], $data['last_name'], $data['email']);

$stmt->execute();
echo "Inserted!";

$stmt->close();
?>