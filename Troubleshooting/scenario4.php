<?php 
$conn = mysqli_connect("localhost","root","","class_db"); 
$first = $_POST['fname']; 
$last = $_POST['fname']; 
$stmt = $conn->prepare("INSERT INTO students (first_name,last_name) VALUES ('$first', '$last')"); 
$stmt->bind_param("ss", $first, $last);
$stmt->execute();

echo "Inserted!"; 

$stmt->close();
?>

<!-- Explanation:
 In line 4, it was written as 'lname' when it should be 'fname'.
 Prepared statements prevents SQL injection without validation.
-->