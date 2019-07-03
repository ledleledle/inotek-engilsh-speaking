<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';
$usr = $_POST['usr'];
$admin = $_POST['log'];
$logbody = "Hapus User : ".$usr;
$logtgl = date('d M Y');

$log = mysqli_query($conn, "INSERT INTO `log`(`tgl`, `admin`, `body`) VALUES ('$logtgl','$admin','$logbody')");
$up = mysqli_query($conn, "DELETE FROM user WHERE username='$usr'");
echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses",
            text: "User Berhasil Dihapus!",
            type: "success"
        }, function() {
            window.location = "users.php";
        });
    }, 1000);
    </script>';
?>