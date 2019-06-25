<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <title>Admin - Dasbor</title>
  <style>
    ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'partials/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'partials/navbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Admin</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Perpustakaan Kata</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">500</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Kritik & Saran</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Aktivitas Terakhir</h6>
                </div>
                  <div class="card-body">
                    <ul class="timeline">
                      <li>
                        <a href="#">New Web Design</a>
                        <a href="#" class="float-right">21 March, 2014</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                      </li>
                      <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                      </li>
                      <li>
                        <a href="#">Awesome Employers</a>
                        <a href="#" class="float-right">1 April, 2014</a>
                        <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                      </li>
                      <li>
                        <a href="#">Awesome Employers</a>
                        <a href="#" class="float-right">1 April, 2014</a>
                        <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                      </li>
                      <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                      </li>
                      <li>
                        <a href="#">21 000 Job Seekers</a>
                        <a href="#" class="float-right">4 March, 2014</a>
                        <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                      </li>
                    </ul>
                  </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <div class="row">
                    <div class="col-sm-8"><h6 class="m-0 font-weight-bold text-primary">Latar Belakang</h6></div>
                    <div class="col-sm-4"><h6 class="m-0 text-primary text-right"><a href="edit.php"><i class="fas fa-pencil-alt"></i> Edit</a></h6></div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="text-center">
                    <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                  </div>
                  <p>Pada era Revolusi Industri 4.0 sekarang, selain pengetahuan dan keahlian dibidang pengelolaan teknologi informasi, Bahasa Inggris tetap menjadi kebutuhan pokok yang harus dimiliki oleh generasi penerus. Bahasa Inggris juga sudah masuk kurikulum pada pendidikan dasar tingkat 1 meski hanya sebatas pengenalan. Apabila orang tua wali murid menghendaki agar anaknya lebih mahir maka bisa diikutkan kursus privat. Pada kursus privat tersebut, salah satu yang dilatih adalah kemampuan berbicara (speaking) dalam bahasa Inggris. Secara konvensional, proses berlatih speaking memerlukan pendamping yang sudah ahli. Pada tingkat dasar, seseorang yang berlatih speaking akan mengucapkan kata dalam bahasa Inggris. Kemudian pendamping akan menilai apakah seseorang tersebut sudah mengucapkannya secara benar atau belum. Ketika tidak sedang menjalani kursus atau menemukan kata-kata baru, akan mengalami kesulitan untuk melakukan penilaian dari latihan atau pembelajaran yang dilakukan secara mandiri. Berdasarkan hal tersebut diatas, tim berinisiatif untuk membuat suatu sistem berupa perangkat lunak yang dapat membantu belajar speaking secara mandiri. Seseorang yang menggunakan perangkat lunak tersebut bisa belajar speaking layaknya didampingi pembimbing. Sistem akan menampilkan kata dalam bahasa Inggris secara terstruktur. Kemudian pengguna mengucapkan kata tersebut dan perangkat lunak akan menilai apakah kata yang diucapkan sudah benar atau belum.</p>
                  <a href="edit.php">Edit Komponen &rarr;</a>
                </div>
              </div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include 'partials/footer.php'; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'partials/js.php'; ?>
</body>

</html>
