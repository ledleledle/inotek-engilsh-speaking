<!DOCTYPE html>
<html lang="en">

<head>
<?php 
$page = 4;
include 'connect.php';
include 'partials/head.php';
?>
  <title>Belajar English - Perpustakkan Kata</title>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include 'partials/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      <?php include 'partials/navbar.php'; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#addModal">
                  <i class="fas fa-plus-circle"></i>
                  Tambah
                </a>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Perpustakaan Kata</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                    
                    <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>Kata</th>
                            <th>Level</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Kata</th>
                            <th>Level</th>
                            <th>Aksi</th>
                          </tr>
                        </tfoot>
                        <tbody>
                            <?php $show = mysqli_query($conn, "SELECT * FROM kata");
                            while ($row = mysqli_fetch_array($show)) {
                              echo "<tr><td>".$row['kata']."</td>";
                              if($row['lvl'] == 1){
                                echo "<td><span class='badge badge-pill badge-success'>Easy</span></td>";
                              }elseif($row['lvl'] == 2){
                                echo "<td><span class='badge badge-pill badge-primary'>Medium</span></td>";
                              }elseif($row['lvl'] == 3){
                                echo "<td><span class='badge badge-pill badge-warning'>Hard</span></td>";
                              }else{
                                echo "<td><span class='badge badge-pill badge-danger'>Very Hard</span></td>";
                              }
                            ?>
                            <td align='center'>
                  <a href='#' class='btn btn-danger btn-circle btn-sm'>
                    <i class='fas fa-trash'></i></a>
                    <a href='#' class='btn btn-info btn-circle btn-sm'>
                    <i class='fas fa-pencil-alt'></i></a></td>
                          </tr><?php } ?>
                        </tbody>
                      </table>
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
  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Kata</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="add_kata.php">
        <div class="modal-body">
          <div class="form-group">
           <select class="form-control" name="diff">
              <option value="1">Easy</option>
              <option value="2">Medium</option>
              <option value="3">Hard</option>
              <option value="4">Very Hard</option>
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" name="kata" placeholder="Kata">
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="Tambah">
        </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
