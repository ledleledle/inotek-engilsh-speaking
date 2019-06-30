<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<?php
include 'connect.php';
if(!isset($_POST['sub'])){
 ?>  
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'partials/head.php'; ?>
  <title>Belajar English - Konfirmasi Lupa Password</title>
</head>

<body class="bg-gradient-danger">
  <?php include 'partials/navbaruser.php'; ?>
  <br><div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Password Dapat Diganti</h1>
                    <p class="mb-4">Apabila kode verifikasi yang anda masukkan sama dengan kode yang kami kirimkan pada email anda.</p>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Kode Anda" name="kode" required>
                    </div>
                    <input type="submit" name="sub" value="Verifikasi!" class="btn btn-primary btn-user btn-block">
                  </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php include 'partials/js.php'; ?>
</body>

</html>
<?php } else {
$kode = $_POST['kode'];
$email = base64_decode($_GET['get']);
$cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND temp = '$kode'");
$cekrow = mysqli_num_rows($cek);
$extime = mysqli_fetch_array($cek);
$nowDate = date("d-m-Y H:i:s");

if(strtotime($extime['exp_temp']) < strtotime($nowDate)){
  $delkode = mysqli_query($conn, "UPDATE `user` SET `temp`='', `exp_temp`='' WHERE email = '$email'");
  echo '<script>
    setTimeout(function() {
        swal({
            title: "Gagal!",
            text: "Kode Kadaluarsa atau Kode yang anda masukkan salah!",
            type: "error"
        }, function() {
            window.location = "forgot-password.php";
        });
    }, 1000);
    </script>';
  } else {
if($cekrow == 0){
  echo '<script>
    setTimeout(function() {
        swal({
            title: "Gagal!",
            text: "Kode Kadaluarsa atau Kode yang anda masukkan salah!",
            type: "error"
        }, function() {
            window.location = "konfirmasi.php?get='.$_GET['get'].'";
        });
    }, 1000);
    </script>';
  } else { ?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'partials/head.php'; ?>
  <title>Belajar English - Ganti Password</title>
</head>

<body class="bg-gradient-danger">
  <?php include 'partials/navbaruser.php'; ?>
  <br><div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">Masukkan Password Baru Anda</h1>
                    <p class="mb-4">Apabila kode verifikasi yang anda masukkan sama dengan kode yang kami kirimkan pada email anda. Jika password sudah diganti, sebaiknya ingatlah baik - baik</p>
                  </div>
                  <form class="user" method="POST" action="gantipass.php">
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputEmail" placeholder="Masukkan Password Baru Anda" name="newpass" minlength="6" required>
                      <input type="hidden" name="emailya" value="<?php echo $email; ?>">
                    </div>
                    <input type="submit" name="sub" value="Ganti Password!" class="btn btn-primary btn-user btn-block">
                  </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
<?php include 'partials/js.php'; ?>
</body>

</html>

<?php }
 }
} ?>