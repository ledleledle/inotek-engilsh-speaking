<?php
include 'connect.php';

if(isset($_POST['sub'])){
	$usr = $_POST['username'];
	$pass = $_POST['fspass'];
	$fsname = $_POST['fsname'];
	$lsname = $_POST['lsname'];
	$em = $_POST['email'];
	// nanti aja lah $cekusr = mysqli_query($conn, "SELECT * FROM ")
	$add = mysqli_query($conn, "INSERT INTO user (username, password, level, email, ftname, lsname) VALUES ('$usr', '$pass', '2', '$em', '$fsname', '$lsname')");
}
?>
<form method="POST">
	<input type="text" name="fsname" placeholder="first"><input type="text" name="lsname" placeholder="last"><br>
	<input type="text" name="username" placeholder="username"><br>
	<input type="email" name="email" placeholder="email"><br>
	<input type="password" name="fspass" placeholder="first pass"><input placeholder="last pass" type="password" name="lspass"><br>
	<input type="submit" value="Daftar" name="sub">
</form>