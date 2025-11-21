<?php 
$conn = mysqli_connect("localhost", "root", "", "class_db"); 

$_POST['id'] = 3;
$id = isset($_POST['id']);

$sql = "SELECT first_name, last_name FROM students WHERE student_id = $id"; 
$res = mysqli_query($conn, $sql); 
$r = mysqli_fetch_assoc($res); 
echo $r['first_name'] . " " . $r['last_name']; 
?>

<!-- Explanation:
 The POST is undefined because of the missing isset() function and
 the id wasn't defined.
 It is used to determine if a variable is declared or not.
 In line 4, it should indicate what data to fetch and be defined specifically,
 as well as in line 7. 
 GET is used when there is an input in the form-->