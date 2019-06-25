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
    <nav class="navbar navbar-expand-md navbar-dark bg-fade fixed-top">
    <a href="index.php"><img class="navbar-brand" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="logo" width="50" height="50"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="register.php"><i class="fas fa-user-plus"></i> <strong>Daftar</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login.php"><i class="fas fa-sign-in-alt"></i> <strong>Login</strong></a>
            </li>
        </ul>
    </div>
    </nav>
<div class="bgimg-1">
  <div class="captiony">
  <span class="bordery" style="background-color:transparent;"><b>APLIKASI BELAJAR ENGLISH SPEAKING MANDIRI</b></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">Latar Belakang</h3>
  <p>Pada era Revolusi Industri 4.0 sekarang, selain pengetahuan dan keahlian dibidang pengelolaan teknologi informasi, Bahasa Inggris tetap menjadi kebutuhan pokok yang harus dimiliki oleh generasi penerus. Bahasa Inggris juga sudah masuk kurikulum pada pendidikan dasar tingkat 1 meski hanya sebatas pengenalan. Apabila orang tua wali murid menghendaki agar anaknya lebih mahir maka bisa diikutkan kursus privat. Pada kursus privat tersebut, salah satu yang dilatih adalah kemampuan berbicara (speaking) dalam bahasa Inggris. Secara konvensional, proses berlatih speaking memerlukan pendamping yang sudah ahli. Pada tingkat dasar, seseorang yang berlatih speaking akan mengucapkan kata dalam bahasa Inggris. Kemudian pendamping akan menilai apakah seseorang tersebut sudah mengucapkannya secara benar atau belum. Ketika tidak sedang menjalani kursus atau menemukan kata-kata baru, akan mengalami kesulitan untuk melakukan penilaian dari latihan atau pembelajaran yang dilakukan secara mandiri. Berdasarkan hal tersebut diatas, tim berinisiatif untuk membuat suatu sistem berupa perangkat lunak yang dapat membantu belajar speaking secara mandiri. Seseorang yang menggunakan perangkat lunak tersebut bisa belajar speaking layaknya didampingi pembimbing. Sistem akan menampilkan kata dalam bahasa Inggris secara terstruktur. Kemudian pengguna mengucapkan kata tersebut dan perangkat lunak akan menilai apakah kata yang diucapkan sudah benar atau belum.</p>
</div>

<div class="bgimg-2">
  <a href="login.php">
  <div class="captiony">
  <span class="bordery" id="hov" style="font-size:20px;color: #f7f7f7;"><b>GET STARTED</b></span>
  </div></a>
</div>

<div style="position:relative;">
  <footer style="padding:50px 80px;text-align: justify; background-color: white;/*edit nih biar lebih oke warnanya */">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div>
              &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">UNP Kediri</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Github</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
</div>
</body>
</html>