<?php if(isset($_SESSION['kesulitan'])){
              header("location: russian.php"); 
            } else {
include 'connect.php';
$page = 5;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <title>Belajar English - Aktifitas Terakhir</title>
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

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">
            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Log Lengkap</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Editor</th>
                      <th>Subjek</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tanggal</th>
                      <th>Editor</th>
                      <th>Subjek</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php $log = mysqli_query($conn, "SELECT * FROM log ORDER BY id DESC");
                      while ($rou = mysqli_fetch_array($log)) { ?>
                      <tr>
                        <td><?php echo $rou['tgl']; ?></td>
                        <th><?php
                        $adm0n = $rou['admin'];
                        $editor = mysqli_query($conn, "SELECT * FROM user WHERE id = '$adm0n'");
                        $rought = mysqli_fetch_array($editor);
                         echo $rought['username']; ?></th>
                        <td><?php echo $rou['body']; ?></td>
                      </tr>  
                      <?php } ?>
                </tbody>
              </table>
                </div>
              </div>

            </div>
          </div>
<?php } else { ?><div class="card shadow mb-4">
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Log Lengkap</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Kata</th>
                      <th>Input Kata</th>
                      <th>Level</th>
                      <th>Nilai</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tanggal</th>
                      <th>Kata</th>
                      <th>Input Kata</th>
                      <th>Level</th>
                      <th>Nilai</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php $log = mysqli_query($conn, "SELECT * FROM log_user WHERE id_user = '$usrid' ORDER BY id DESC");
                      while ($rou = mysqli_fetch_array($log)) { ?>
                      <tr>
                        <td><?php echo $rou['tgl']; ?></td>
                        <td><?php
                        $wew = $rou['id_kata'];
                        $kata = mysqli_query($conn, "SELECT * FROM kata WHERE id='$wew'");
                        $tunjuk = mysqli_fetch_array($kata);
                         echo $tunjuk['kata']."</td><td>
                         ".$rou['input']."</td><td>";
                         if($tunjuk['lvl'] == 1) {
                          echo "Easy";
                         }elseif($tunjuk['lvl'] == 2) {
                          echo "Medium";
                         }elseif($tunjuk['lvl'] == 3) {
                          echo "Hard";
                         }else {
                          echo "Very Hard";
                         } ?></td>
                        <td><?php echo $rou['nilai']; ?></td>
                      </tr>  
                      <?php } ?>
                </tbody>
              </table>
                </div>
              </div>

            </div>
          </div><?php } ?>
        </div>
        <!-- /.container-fluid -->

      </div>
    </div>
  </div>
    </div>
  </div>
    <!-- End of Content Wrapper -->
<?php include 'partials/footer.php'; ?>
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'partials/js.php'; 
  if(isset($_SESSION['kesulitan'])){
              include 'russian.php';
              echo '<script>window.location.reload(true);</script>'; 
            } ?>
</body>

</html>
<?php } ?>