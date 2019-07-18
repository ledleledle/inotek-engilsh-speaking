<?php if(isset($_SESSION['kesulitan'])){
              header("location: russian.php"); 
            } else {
$page = '1';
include 'connect.php';
$user1 = mysqli_query($conn, "SELECT * FROM user WHERE level = 2");
$admin1 = mysqli_query($conn, "SELECT * FROM user WHERE level = 1");
$perp = mysqli_query($conn, "SELECT * FROM kata");
$kritik = mysqli_query($conn, "SELECT * FROM kritik");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <title>Belajar English Speaking  - Dasbor</title>
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
<?php if($lvlusr == 1){ ?>
          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($user1); ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($admin1); ?></div>
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
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($perp); ?></div>
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
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo mysqli_num_rows($kritik); ?></div>
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
                      <?php $log = mysqli_query($conn, "SELECT * FROM log ORDER BY id DESC LIMIT 0,8");
                      $cekrow = mysqli_num_rows($log);
                      if($cekrow == 0){
                        echo "Belum Ada Aktiivitas";
                      } else{
                      while ($rou = mysqli_fetch_array($log)) { 
                        echo "<li>";
                        if(strlen($rou['body']) >= 50){
                          echo '<a href="#">'.substr($rou['body'], 0, 40).' ...</a>';
                        } else {
                        ?>
                        <a href="#"><?php echo $rou['body']; } ?></a>
                        <a href="#" class="float-right"><?php echo $rou['tgl']; ?></a>
                        <p><?php $adm0n = $rou['admin'];
                        $admon = mysqli_query($conn, "SELECT * FROM user WHERE id = '$adm0n'");
                        $adm00n = mysqli_fetch_array($admon);
                        echo 'Oleh : '.$adm00n['username']; ?></p>
                      </li>  
                      <?php } ?>
                      <li>
                        <a href="log.php">Log Lengkap &rarr;</a>
                      </li>
                    <?php } ?>
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
                  <?php $show = mysqli_query($conn, "SELECT * FROM info");
                  $row = mysqli_fetch_array($show);
                  echo $row['latar']; ?>
                  <a href="edit.php">Edit Komponen &rarr;</a>
                </div>
              </div>

            </div>
          </div>
<?php } else { 

        ?>
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
                      <?php $log = mysqli_query($conn, "SELECT * FROM log_user WHERE id_user='$usrid' ORDER BY id DESC LIMIT 0,5");
                      $cekrow = mysqli_num_rows($log);
                      if($cekrow == 0){
                        echo "Belum Ada Aktiivitas";
                      } else{
                      while ($rou = mysqli_fetch_array($log)) { ?>
                      <li>
                        <a href="#"><?php 
                        $aeee = $rou['id_kata'];
                        $kata = mysqli_query($conn, "SELECT * FROM kata WHERE id='$aeee'");
                        $kata2 = mysqli_fetch_array($kata);
                        echo "<strong>";
                        if($kata2['lvl'] == 1){
                          echo "Easy : ";
                        } elseif ($kata2['lvl'] == 2) {
                          echo "Medium : ";
                        } elseif ($kata2['lvl'] == 3) {
                          echo "Hard : ";
                        } else{
                          echo "Very Hard : ";
                        }
                        echo "</strong>";
                        echo $kata2['kata']; ?></a>
                        <a href="#" class="float-right"><?php echo $rou['tgl']; ?></a>
                        <p><?php echo 'Nilai : '.$rou['nilai']; ?></p>
                      </li>  
                      <?php } 
                      echo '<li>
                        <a href="log.php">Log Lengkap &rarr;</a>
                      </li>'; } ?>
                    </ul>
                  </div>
              </div>
            </div>

            <div class="col-lg-6 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <div class="row">
                    <div class="col-sm-8"><h6 class="m-0 font-weight-bold text-primary">Statistik Keseluruhan Anda</h6></div>
                  </div>
                </div>
                <div class="card-body">
                  <?php $show = mysqli_query($conn, "SELECT * FROM log_user WHERE id_user = '$usrid'");
                  $count = mysqli_num_rows($show);
                  if($count > 0){ ?>
                  <div class="chart-pie pt-4">
                    <div style="width: 100%; height: 40px; position: absolute; top: 50%; left: 0; line-height:19px; text-align: center; z-index: 999999999999999">
                    <?php
                      $show1 = mysqli_query($conn, "SELECT AVG(nilai) AS nilai FROM log_user WHERE id_user = '$usrid'");
                      $show2 =mysqli_fetch_array($show1);
                      if($show2['nilai'] > 99){
                      $sub = substr($show2['nilai'], 0, 3); }
                      else if(strlen($show2['nilai']) > 3){
                        $sub = substr($show2['nilai'], 0, 4);
                      } else {
                        $sub = substr($show2['nilai'], 0, 2);
                      }
                      echo '<a style="font-size: 70px;">'.$sub.'</a>'; ?>
                    </div>
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <hr>
                  <div class="text-center">
                  <?php echo "<code>Anda Telah Bermain : <strong>".$count." x</strong> dan Nilai Rata - Rata Anda : <strong>".$sub."</strong></code>
                </div>"; 
                } else {
                  echo "Belum Ada Aktiivitas";
                } ?>
              </div>
              </div>

            </div>
          </div>
 <?php } ?>
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
<?php } ?>