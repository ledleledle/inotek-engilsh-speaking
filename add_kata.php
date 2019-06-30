<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';

$kata = $_POST['kata'];
$level = $_POST['diff'];
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