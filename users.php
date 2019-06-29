<?php include 'connect.php';
$page = "2";
if(isset($_POST['submit'])){
  @$usr = $_POST['name'];
  @$pass = $_POST['pass'];
  $cek = mysqli_query($conn, "SELECT * FROM user WHERE username = '$usr'");
  $cek2 = mysqli_num_rows($cek);
  if($cek2 == 0){
  $add = mysqli_query($conn, "INSERT INTO `user`(`username`, `password`, `level`, `email`) VALUES ('$usr','$pass','1', '-')");
  echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses!",
            text: "Tambah Admin Selesai",
            type: "success"
        }, function() {
            window.location = "users.php";
        });
    }, 1000);
</script>';
  } else {
    echo '<script>
    setTimeout(function() {
        swal({
            title: "Gagal!",
            text: "Username Admin Telah Dipakai!",
            type: "error"
        }, function() {
            window.location = "users.php";
        });
    }, 1000);
    </script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <title>Admin - Kontrol User</title>
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

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
                <a href="#collapseCardExample2" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample2">
                  <h6 class="m-0 font-weight-bold text-primary">Tambah & Edit Admin</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample2">
                  <div class="card-body">
                    <form class="user" method="POST">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="name" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pass" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                    <input type="submit" name="submit" value="Tambah" class="btn btn-primary btn-user btn-block">
                    </div>
                  </form>
                  </div>
              </div>
            </div>

            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">List User</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                <div class="card-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Level</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php $show = mysqli_query($conn, "SELECT * FROM user WHERE NOT id='$usrid'");
                  while($row = mysqli_fetch_array($show)){
                  echo "<tr>
                  <td>".$row['username']."</td>
                  <td>".$row['password']."</td>";
                  if($row['level'] == 1){
                  echo "<td align='center'><span class='badge badge-pill badge-success text-sm'>Admin</span></td>"; }else {
                    echo "<td align='center'><span class='badge badge-pill badge-danger'>User</span></td>";
                  }
                  echo "<td>".$row['email']."</td>
                  <td align='center'>
                  <a href='#' class='btn btn-danger btn-circle btn-sm'>
                    <i class='fas fa-trash'></i></a>
                    <a href='#' class='btn btn-info btn-circle btn-sm'>
                    <i class='fas fa-pencil-alt'></i></a></td>
                  </tr>"; } ?>
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
