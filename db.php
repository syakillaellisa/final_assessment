<?php
$localhost = "localhost";
$username = "root";
$password = "Ru5541n11977";
$db_name = "student_grading";

$conn = new mysqli($localhost, $username, $password, $db_name);
if ($conn->connect_error)
    die("connect failed: " . $conn->connect_error);

?>