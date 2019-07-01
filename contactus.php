<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $nama = $_POST['name'];
  $em = $_POST['email'];
  $tipe = $_POST['type'];
  $isi = $_POST['isi'];
  $tgl = date('d M Y');
  $inst = mysqli_query($conn, "INSERT INTO kritik (dari, email, tipe, isi, status, tgl) VALUES ('$nama', '$em', '$tipe', '$isi', '1', '$tgl')");
  echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses!",
            text: "Kritik/Saran Sudah Diterima Oleh Admin.",
            type: "success"
        }, function() {
            window.location = "contactus.php";
        });
    }, 1000);
    </script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'partials/head.php'; ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <title>Belajar English - Kontak Kami</title>
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
                    <h1 class="h4 text-gray-900 mb-4">Kontak Kami</h1>
                    <p>Masukkan Masukan & Saran Anda.</p>
                  </div>
                  <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="name" placeholder="Nama Anda" required>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" name="email" placeholder="Email Anda" required>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="type" required>
                        <option value="1">Saran</option>
                        <option value="2">Kritik</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="isi" placeholder="Isi Pesan" required></textarea>
                    </div>
                    <div class="form-group">
                    <input type="submit" name="submit" value="Kirim" class="btn btn-primary btn-user btn-block">
                    </div>
                  </form>                  
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