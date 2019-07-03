<?php
session_start();
include 'connect.php';
$user = $_SESSION['userid'];
$tgl = date("d-m-Y H:i:s");
$sql = mysqli_query($conn, "UPDATE user SET last_login = '$tgl' WHERE id='$user'");
session_destroy();
header('location: index.php');
?>