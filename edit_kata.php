<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';
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
$kata = $_POST['kata'];
$key = $_POST['key'];
$admin = $_POST['log'];
$logbody = "Edit Kata : ".$key." ke ".$kata.", Level : ".$lvel;
$logtgl = date('d M Y');

$up = mysqli_query($conn, "UPDATE `kata` SET lvl = '$level', kata = '$kata' WHERE kata = '$key'");
$log = mysqli_query($conn, "INSERT INTO `log`(`tgl`, `admin`, `body`) VALUES ('$logtgl','$admin','$logbody')");
echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses",
            text: "Kata Berhasil Diubah!",
            type: "success"
        }, function() {
            window.location = "perpus.php";
        });
    }, 1000);
    </script>';
?>