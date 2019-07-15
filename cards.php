<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; 
  $page = 7;
  ?>
  <title>Belajar English - Pilih Level</title>
<style> 
.box:hover {
background-color: #f1f1f2; 
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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Pilih Level</h1>
          </div>

          <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="redirect.php?id=<?php echo base64_encode('1') ?>" style="text-decoration: none;">
              <div class="card border-left-success box shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Easy</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-smile-beam fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="redirect.php?id=<?php echo base64_encode('2') ?>" style="text-decoration: none;">
              <div class="card border-left-primary box shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Medium</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-smile fa-2x "></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="redirect.php?id=<?php echo base64_encode('3') ?>" style="text-decoration: none;">
              <div class="card border-left-warning box shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Level</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Hard</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-skull fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <a href="redirect.php?id=<?php echo base64_encode('4') ?>" style="text-decoration: none;">
              <div class="card border-left-danger box shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Level</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Very Hard</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-skull-crossbones fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div>

          <div class="row">

            <div class="col-lg-12">
              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Info</h6>
                </div>
                <div class="card-body">
                  Setelah anda memilih level. 5 Kata/kalimat akan keluar secara acak dan mulailah berbicara! Setelah suara terdeteksi, nilai prosentase kecocokan suara akan ditampilkan. Dan pastikan mikrofon sudah ter-install.
                  <br><strong class="text-danger">Catatan :</strong>
                  <strong class="text-danger"><li>Pastikan Koneksi Internet Stabil kurang lebih 300kb/s, silakan cek di </strong><strong><a href="https://www.speedtest.net/id" target="blank">Speedtest</a></strong></li>
                  <strong class="text-danger"><li>Keluar/menutup Browser akan menutup sesi soal anda.</strong></li>
                  <strong class="text-danger"><li>Aplikasi ini masih dalam tahap pengembangan, Jadi jika menemukan masalah/bug. Segera kontak admin</strong> <strong><a href="contactus.php" target="blank">di halaman Kritik & Saran</a></strong></li>
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

  <!-- Logout Modal-->
  <?php include 'partials/js.php';
  if(isset($_SESSION['kesulitan'])){
              include 'russian.php';
              echo '<script>window.location.reload(true);</script>'; 
            } ?>
</body>

</html>
