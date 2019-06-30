<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
use PHPMailer\PHPMailer\PHPMailer;
date_default_timezone_set("Asia/Jakarta");
include 'connect.php';
$em = $_POST['email'];
$cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '$em'");
$cek2 = mysqli_num_rows($cek);
$row = mysqli_fetch_array($cek);

if($row['temp'] != ''){
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Cek Email Anda!",
            text: "Kami sudah mengirimkan kode konfirmasi untuk anda.",
            type: "info"
        }, function() {
            window.location = "forgot-password.php";
        });
    }, 1000);
    </script>';
} else {
if($cek2 == 0){
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Gagal!",
            text: "Email tidak terdaftar!",
            type: "error"
        }, function() {
            window.location = "forgot-password.php";
        });
    }, 1000);
    </script>';
} else { 
    $kode = substr(md5($em), 0, 5).date('hs');
    $expFormat = mktime(date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y"));
    $expDate = date("d-m-Y H:i:s",$expFormat);
    $upkode = mysqli_query($conn, "UPDATE `user` SET `temp`='$kode', `exp_temp`='$expDate' WHERE email = '$em'");
require 'vendor/autoload.php';
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "leonidasjr2133@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "anjing2133";
//Set who the message is to be sent from
$mail->setFrom('from@example.com', 'APLIKASI BELAJAR ENGLISH SPEAKING MANDIRI');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress($row['email'], $row['ftname']);
$mail->Subject = 'Lupa Password';
$mail->IsHTML(true);
$mail->Body = 'Permintaan Lupa Password anda diterima. Dengan Username : '.$row['username'].' dan Email : '.$em.'.  Silakan klik tautan berikut <br> http://localhost/pakardi/konfirmasi.php?get='.base64_encode($em).' lalu masukkan kode : '.$kode.'. Kode akan kadaluarsa pada : '.$expDate;

if (!$mail->send()) {
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Gagal!",
            text: "Ada yang tidak beres. Cek koneksi anda!",
            type: "error"
        }, function() {
            window.location = "forgot-password.php";
        });
    }, 1000);
    </script>';
} else {
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses!",
            text: "Cek Email Anda! Kode akan kadaluarsa dalam 1 hari.",
            type: "success"
        }, function() {
            window.location = "forgot-password.php";
        });
    }, 1000);
    </script>';
        }
    }
}