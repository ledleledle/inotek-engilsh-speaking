<!DOCTYPE html>
<html lang="en">

<head>

  <title>Belajar English - Statistik Anda</title>
  <?php include 'partials/head.php';
  $page = 8; ?>
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

            <div class="col-xl-6 col-lg-7">

              <!-- Area Chart -->
              <div class="card shadow mb-4">

                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Easy</h6>
                </div>
                <div class="card-body">
                  <?php $cek1 = mysqli_query($conn, "SELECT * FROM log_user WHERE id_user='$usrid' AND dif = 1");
                  $itung1 = mysqli_num_rows($cek1);
                  if($itung1 == 0){
                    echo "Belum Ada Aktifitas</div>";
                  } else { ?>
                  <div class="chart-area">
                    <div style="width: 100%; height: 40px; position: absolute; top: 50%; left: 0; line-height:19px; text-align: center; z-index: 999999999999999">
                    <?php
                      $show1 = mysqli_query($conn, "SELECT AVG(nilai) AS nilai FROM log_user WHERE id_user = '$usrid' AND dif=1");
                      $show2 =mysqli_fetch_array($show1);
                      $sub = substr($show2['nilai'], 0, 2);
                      echo '<a style="font-size: 70px;">'.$sub.'</a>'; ?>
                    </div>
                    <canvas id="easyChart"></canvas>
                  </div>
                  <hr>
                  <div class="text-center">
                  <?php echo '<code>Anda Telah Bermain : <strong>'.$itung1.' x</strong> dan Nilai Rata - Rata Anda : <strong>'.$sub.'</strong></code>
                </div>'; ?>
                </div>
                <?php } ?>
              </div>
            

              <!-- Bar Chart -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Medium</h6>
                </div>
                <div class="card-body">
                  <?php $cek1 = mysqli_query($conn, "SELECT * FROM log_user WHERE id_user='$usrid' AND dif = 2");
                  $itung1 = mysqli_num_rows($cek1);
                  if($itung1 == 0){
                    echo "Belum Ada Aktifitas</div>";
                  } else { ?>
                  <div class="chart-area">
                    <div style="width: 100%; height: 40px; position: absolute; top: 50%; left: 0; line-height:19px; text-align: center; z-index: 999999999999999">
                    <?php
                      $show1 = mysqli_query($conn, "SELECT AVG(nilai) AS nilai FROM log_user WHERE id_user = '$usrid' AND dif=2");
                      $show2 =mysqli_fetch_array($show1);
                      $sub = substr($show2['nilai'], 0, 2);
                      echo '<a style="font-size: 70px;">'.$sub.'</a>'; ?>
                    </div>
                    <canvas id="medChart"></canvas>
                  </div>
                  <hr>
                  <div class="text-center">
                  <?php echo '<code>Anda Telah Bermain : <strong>'.$itung1.' x</strong> dan Nilai Rata - Rata Anda : <strong>'.$sub.'</strong></code>
                </div>'; ?>
                </div>
                <?php } ?>
              </div>

            </div>

            <!-- Donut Chart -->
            <div class="col-xl-6 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Hard</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <?php $cek1 = mysqli_query($conn, "SELECT * FROM log_user WHERE id_user='$usrid' AND dif = 3");
                  $itung1 = mysqli_num_rows($cek1);
                  if($itung1 == 0){
                    echo "Belum Ada Aktifitas</div>";
                  } else { ?>
                  <div class="chart-area">
                    <div style="width: 100%; height: 40px; position: absolute; top: 50%; left: 0; line-height:19px; text-align: center; z-index: 999999999999999">
                    <?php
                      $show1 = mysqli_query($conn, "SELECT AVG(nilai) AS nilai FROM log_user WHERE id_user = '$usrid' AND dif=3");
                      $show2 =mysqli_fetch_array($show1);
                      $sub = substr($show2['nilai'], 0, 2);
                      echo '<a style="font-size: 70px;">'.$sub.'</a>'; ?>
                    </div>
                    <canvas id="hardChart"></canvas>
                  </div>
                  <hr>
                  <div class="text-center">
                  <?php echo '<code>Anda Telah Bermain : <strong>'.$itung1.' x</strong> dan Nilai Rata - Rata Anda : <strong>'.$sub.'</strong></code>
                </div>'; ?>
                <?php } ?>
              </div>

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Very Hard</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <?php $cek1 = mysqli_query($conn, "SELECT * FROM log_user WHERE id_user='$usrid' AND dif = 4");
                  $itung1 = mysqli_num_rows($cek1);
                  if($itung1 == 0){
                    echo "Belum Ada Aktifitas</div>";
                  } else { ?>
                  <div class="chart-area">
                    <div style="width: 100%; height: 40px; position: absolute; top: 50%; left: 0; line-height:19px; text-align: center; z-index: 999999999999999">
                    <?php
                      $show1 = mysqli_query($conn, "SELECT AVG(nilai) AS nilai FROM log_user WHERE id_user = '$usrid' AND dif=4");
                      $show2 =mysqli_fetch_array($show1);
                      $sub = substr($show2['nilai'], 0, 2);
                      echo '<a style="font-size: 70px;">'.$sub.'</a>'; ?>
                    </div>
                    <canvas id="vrhardChart"></canvas>
                  </div>
                  <hr>
                  <div class="text-center">
                  <?php echo '<code>Anda Telah Bermain : <strong>'.$itung1.' x</strong> dan Nilai Rata - Rata Anda : <strong>'.$sub.'</strong></code>
                </div>'; ?>
                <?php } ?>
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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <?php include 'js/demo/chart-pie-demo.php'; ?>
  <?php include 'js/demo/easy-chart.php'; ?>
  <?php include 'js/demo/medium-chart.php'; ?>
  <?php include 'js/demo/hard-chart.php'; ?>
  <?php include 'js/demo/vr-hard-chart.php'; ?>

</body>

</html>
