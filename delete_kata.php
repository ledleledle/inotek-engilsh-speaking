<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';
$kata = $_POST['kata'];
$admin = $_POST['log'];
$logbody = "Hapus Kata : ".$kata;
$logtgl = date('d M Y');

$log = mysqli_query($conn, "INSERT INTO `log`(`tgl`, `admin`, `body`) VALUES ('$logtgl','$admin','$logbody')");
$up = mysqli_query($conn, "DELETE FROM kata WHERE kata='$kata'");
echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses",
            text: "Kata Berhasil Dihapus!",
            type: "success"
        }, function() {
            window.location = "perpus.php";
        });
    }, 1000);
    </script>';
?>