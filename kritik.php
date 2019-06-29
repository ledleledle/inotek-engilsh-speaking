<?php include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <title>Admin - Kritik & Saran</title>
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
                  <h6 class="m-0 font-weight-bold text-primary">Kritik & Saran</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tanggal</th>
                      <th>Pengirim</th>
                      <th>Email</th>
                      <th>Tipe</th>
                      <th>Isi</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tanggal</th>
                      <th>Pengirim</th>
                      <th>Email</th>
                      <th>Tipe</th>
                      <th>Isi</th>
                      <th>Status</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php $log = mysqli_query($conn, "SELECT * FROM kritik");
                      while ($rou = mysqli_fetch_array($log)) { ?>
                      <tr>
                        <td><?php echo $rou['tgl']; ?></td>
                        <td><?php echo $rou['dari']; ?></td>
                        <td><?php echo $rou['email']; ?></td>
                        <td><?php if($rou['tipe'] == 1){
                          echo "Saran";
                        } else {
                          echo "Kritik";
                        } ?></td>
                        <td><?php echo $rou['isi']; ?></td>
                        <td><?php if($rou['status'] == 1){
                          echo "<span class='badge badge-pill badge-warning'><i class='fas fa-check'></i> Belum Dibaca</span>";
                        } elseif($rou['status'] == 2) {
                          echo "<span class='badge badge-pill badge-success'><i class='fas fa-check-double'></i> Dibaca</span>";
                        } else {
                          echo "<span class='badge badge-pill badge-primary'><i class='fas fa-mail-bulk'></i> Dibalas</span>";
                        } ?></td>
                      </tr>  
                      <?php } ?>
                </tbody>
              </table>
                </div>
              </div>

            </div>
          </div>
<?php } else { include '404.html'; } ?>
        </div>
        <!-- /.container-fluid -->

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

  <?php include 'partials/js.php'; ?>
</body>

</html>
