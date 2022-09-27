<?php
include('include/linkDB.php');
session_start();
$id = $_GET['a'];
if (isset($id)) {
    $d = "DELETE FROM couchs WHERE c_id=$id ";
    mysqli_query($conn, $d);
    header('Location:dashboard.php');
}
else {
    echo "error";

}
?>