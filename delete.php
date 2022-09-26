<?php
include('include/linkDB.php');
session_start();
$id = $_GET['a'];
if (isset($id)) {
    $d = "DELETE FROM users WHERE user_id=$id ";
    mysqli_query($conn, $d);
    header('Location:coach.php');
}
else {
    echo "error";

}
?>