<?php
session_start();
if(!isset($_SESSION['userid'])){
include 'connect.php';
@$param = $_SESSION['param'];

if(isset($_POST['submit'])){
$username = mysqli_real_escape_string($conn,$_POST['name']);
$password = mysqli_real_escape_string($conn,$_POST['pass']);

$query = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);
$userid = mysqli_fetch_array($query);
if($cek == 0) {
  header("location:login.php");
  $_SESSION['param'] = 'gagal';
}else{
    unset($_SESSION['param']);
    header('location:dashboard.php');
    $_SESSION['userid'] = $userid['id'];
    $_SESSION['lvl'] = $userid['level'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'partials/head.php'; ?>
  <title>Belajar English - Login</title>
</head>

<!-- biar cakep pake gambar bg nya -->
<!-- <body class="bg-gradient-success" style="background-image: url('../pakardi/bg/bg1.jpeg');"> -->
<body class="bg-gradient-success">
  <div class="container">
    <?php include 'partials/navbaruser.php'; ?>
    <br>
    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                    <p>Masuk untuk memulai pembelajaran</p>
                    <?php
                      if($param == "gagal"){ ?>
                        <div class="alert alert-danger">
                          <strong>Gagal !</strong> Username atau Password Salah.
                    </div> <?php } ?>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="name" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass">
                    </div>
                    <div class="form-group">
                    <input type="submit" name="submit" value="Login" class="btn btn-primary btn-user btn-block">
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="register.php">Belum punya akun? Daftar!</a>
                  </div>
                  <div class="text-center">
                  <a class="small" href="forgot-password.php">Lupa Password?</a>
                  </div>
                </div>
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
<?php } else { header('location:dashboard.php'); } ?>