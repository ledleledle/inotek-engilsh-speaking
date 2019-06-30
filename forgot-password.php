<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'partials/head.php'; ?>
  <title>Belajar English - Lupa Password</title>
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
                    <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                    <p class="mb-4">Kami mengerti hal itu bisa saja terjadi. Masukkan e-mail anda dan kami akan memberikan balasan untuk mengganti password anda!</p>
                  </div>
                  <form class="user" method="POST" action="send-an-email.php">
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" required>
                    </div>
                    <input type="submit" name="sub" value="Kirim!" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="register.php">Belum punya akun? Daftar!</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="login.php">Sudah mempunyai akun? Login!</a>
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
