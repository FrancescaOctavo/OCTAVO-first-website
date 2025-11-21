<?php
$conn = mysqli_connect("localhost","root","","class_db");

$newEmail = $_POST['email'];
$id = $_POST['id'];

$stmt = $conn->prepare("UPDATE students SET email = ? WHERE student_id = ?");
$stmt->bind_param("si", $newEmail, $id);
$stmt->execute();

echo "Updated!";

$stmt->close();
?>