<?php 
$conn = mysqli_connect("localhost","root","","class_db");

$fname = isset($_POST['fname']);

$sql = "SELECT * FROM students WHERE first_name = '$fname'";
$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    echo $row['first_name'] . "<br>";
}
?>

<!-- Explanation:
 Missing isset () function makes the code assume that 
 there is no value.
 $fname in line 6 must be sinlge-quoted because strings
 are enclosed in quotes to avoid unknown column errors.
-->