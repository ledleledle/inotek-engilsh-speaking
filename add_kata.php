<?php
session_start();
$admin = $_SESSION['userid']; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';

$kata = $_POST['kata'];
$level = $_POST['diff'];
if($level == 1){
    $lvel = "Easy";
}if($level == 2){
    $lvel = "Medium";
}if($level == 3){
    $lvel = "Hard";
}if($level == 4){
    $lvel = "Very Hard";
}
  $logbody = "Tambah Kata : ".$kata.", Level : ".$lvel;
  $logtgl = date('d M Y');
  $log = mysqli_query($conn, "INSERT INTO `log`(`tgl`, `admin`, `body`) VALUES ('$logtgl','$admin','$logbody')");
$add = mysqli_query($conn, "INSERT INTO kata (lvl, kata) VALUES ('$level', '$kata')");
echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses",
            text: "Kata Berhasil Ditambahkan!",
            type: "success"
        }, function() {
            window.location = "perpus.php";
        });
    }, 1000);
    </script>';
    ?>