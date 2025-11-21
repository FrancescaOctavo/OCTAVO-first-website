<?php
$conn = mysqli_connect("localhost","root","","class_db");

$page = intval($_GET['page']);
$limit = 5;
$offset = $page * $limit;

$sql = "SELECT * FROM students LIMIT $offset, $limit";
$res = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($res)) {
    echo $row['first_name'] . " " . $row['last_name'] . "<br>";
}
?>
