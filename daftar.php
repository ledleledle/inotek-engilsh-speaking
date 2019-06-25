   <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';

if(isset($_POST['sub'])){
	$usr = $_POST['username'];
	$pass = $_POST['fspass'];
	$fsname = $_POST['fsname'];
	$lsname = $_POST['lsname'];
	$em = $_POST['email'];
	$cekusr = mysqli_query($conn, "SELECT * FROM user WHERE username='$usr'");
	$row = mysqli_num_rows($cekusr);
	$cekemail = mysqli_query($conn, "SELECT * FROM user WHERE email='$em'");
	$row1 = mysqli_num_rows($cekemail);
	if($row >= 1 && $row1 >= 1){
		echo '<script>
    setTimeout(function() {
        swal({
            title: "Username dan Email Sudah Ada!",
            text: "Pilih Username dan Email Yang Sesuai!",
            type: "error"
        }, function() {
            window.location = "register.php";
        });
    }, 1000);
</script>';
	}elseif ($row1 >=1) {
		echo '<script>
    setTimeout(function() {
        swal({
            title: "Email Sudah Ada!",
            text: "Pilih Email Yang Sesuai!",
            type: "error"
        }, function() {
            window.location = "register.php";
        });
    }, 1000);
</script>';
	}elseif ($row >=1) {
		echo '<script>
    setTimeout(function() {
        swal({
            title: "Username Sudah Ada!",
            text: "Pilih Username Yang Sesuai!",
            type: "error"
        }, function() {
            window.location = "register.php";
        });
    }, 1000);
</script>';
	}else{
	$add = mysqli_query($conn, "INSERT INTO user (username, password, level, email, ftname, lsname) VALUES ('$usr', '$pass', '2', '$em', '$fsname', '$lsname')");
	echo '<script>
    setTimeout(function() {
        swal({
            title: "Daftar Berhasil",
            text: "Sekarang Anda Bisa Login!",
            type: "success"
        }, function() {
            window.location = "login.php";
        });
    }, 1000);
</script>';
	}
}
?>
