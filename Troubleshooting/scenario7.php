<?php 
$conn = mysqli_connect("localhost","root","","class_db");

$id = $_POST['id'];
$email = $_POST['email'];

$stmt = $conn->prepare("UPDATE students SET email = ? WHERE student_id = ?");
$stmt->bind_param("si", $email, $id);

$stmt->execute() or die("Update failed: " . $stmt->error);

echo "Updated!";

$stmt->close();
?>