<?php 
$conn = mysqli_connect("localhost","root","","class_db");
$id = intval($_GET['id']);
$sql = "DELETE FROM students WHERE id = $id; 
mysqli_query($conn, $sql);
?>