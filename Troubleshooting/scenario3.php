<?php 
$conn = mysqli_connect("localhost","root","","class_db"); 

$age = $_GET['age']; 
$stmt = $conn->prepare("SELECT * FROM students WHERE age = ?");
$stmt->bind_param("i", $age);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}

$stmt->close();
?>

<!-- Explanation:
 The series of $stmt functions as a prepared SQL statement,
 it allows you to separate the SQL structure from the user input.
 Then, it must get the results before closing the statement.
-->