<?php
session_start();
include 'connect.php';
?>

 <!DOCTYPE html>
<html>
<head>
  <title>Belajar English</title>
  <!-- ntar jadiin satu aja di folder partials -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style/styleuser.css">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<script>
  $(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
        if (scroll > 0) {
      $(".navbar").addClass("navbar-scroll");
        }
        else{
      $(".navbar").removeClass("navbar-scroll");    
    }
    if (scroll > 200) {
      $(".navbar").addClass("bg-primary");
    }

    else{
      $(".navbar").removeClass("bg-primary");   
    }
  })
})
</script>
<!-- until this point -->
</head>
<body>
    <?php include 'partials/navbaruser.php'; ?>
<div class="bgimg-1">
  <div class="captiony">
  <span class="bordery" style="background-color:transparent;"><b>APLIKASI BELAJAR ENGLISH SPEAKING MANDIRI</b></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;"><strong>Latar Belakang</strong></h3>
  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
  <?php $show = mysqli_query($conn, "SELECT * FROM info");
  $rou = mysqli_fetch_array($show);
  echo $rou['latar']; ?>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 30px;">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 70%; margin: auto;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="carousel-caption d-none d-md-block bg-success">
        <h5>Tampilan</h5>
        <p>Tampilan Yang Menarik</p>
      </div>
      <img class="d-block w-100" src="bg/car1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block bg-success">
        <h5>Level</h5>
        <p>Tentukan Skill Yang Kamu Punya</p>
      </div>
      <img class="d-block w-100" src="bg/car2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block bg-success">
        <h5>Aktifitas Terakhir</h5>
        <p>Aktifitas anda akan selalu dicatat dan anda dapat belajar dari kesalahan masa lalu.</p>
      </div>
      <img class="d-block w-100" src="bg/car3.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <div class="carousel-caption d-none d-md-block bg-success">
        <h5>Statistik</h5>
        <p>Menampilkan Nilai Rata - rata yang anda kumpulkan.</p>
      </div>
      <img class="d-block w-100" src="bg/car4.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php
if(!isset($_SESSION['lvl'])){ ?>
<div class="bgimg-2">
  <a href="login.php">
  <div class="captiony">
  <span class="bordery" id="hov" style="font-size:20px;color: #f7f7f7;"><b>DAFTAR SEKARANG!</b></span>
  </div></a>
</div>
<?php } else { echo ''; } ?>

<div style="position:relative;">
  <footer style="padding:50px 80px;text-align: justify; background-color: white;">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div>
              &copy; 2019 <a href="http://unpkediri.ac.id/" class="font-weight-bold ml-1" target="_blank">UNP Kediri</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="contactus.php" class="nav-link">Kontak Kami</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/ledleledle/inotek" class="nav-link" target="_blank">Github</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
</div>
<!-- Modal Logout Biar cakep -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>