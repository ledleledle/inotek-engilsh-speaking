<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';
$pass = $_POST['newpass'];
$em = $_POST['emailya'];
$up = mysqli_query($conn, "UPDATE `user` SET password = '$pass', temp = '', exp_temp = '' WHERE email = '$em'");

echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses",
            text: "Password Berhasil diganti. Silahkan Login!",
            type: "success"
        }, function() {
            window.location = "login.php";
        });
    }, 1000);
    </script>';
    ?>