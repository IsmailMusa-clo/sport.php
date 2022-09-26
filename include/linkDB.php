<?php
$host = 'localhost';
$user = 'root';
$password = null;
$db = 'khaled_project';
// Create connection


try {
    $conn = mysqli_connect($host, $user, $password, $db);
}
catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
?>