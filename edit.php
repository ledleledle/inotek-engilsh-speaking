<?php
include 'connect.php';
@$submit = $_POST['edit'];
$cek = mysqli_query($conn, "SELECT * FROM info");
$row = mysqli_fetch_array($cek);
$cekrow = mysqli_num_rows($cek);
if(isset($_POST['sub'])){
  if($cekrow == 0){
  $tambah = mysqli_query($conn, "INSERT INTO `info`(`id`, `latar`) VALUES (1,'$submit')");
} else {
  $edit = mysqli_query($conn, "UPDATE info SET latar='$submit' WHERE id='1'");
}
  echo '<script>
    setTimeout(function() {
        swal({
            title: "Sukses!",
            type: "success"
        }, function() {
            window.location = "edit.php";
        });
    }, 1000);
</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'partials/head.php'; ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="vendor/ckeditor/ckeditor.js"></script>
  <script src="vendor/ckeditor/samples/js/sample.js"></script>
  <title>Admin - Edit Halaman</title>
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

            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <div class="row">
                    <div class="col-sm-8"><h6 class="m-0 font-weight-bold text-primary">Edit Latar Belakang</h6></div>
                  </div>
                </div>
                <div class="card-body">
                  <form method="POST">
                  <textarea id="editor" name="edit">
                    <?php echo $row['latar']; ?>
                </textarea>
                <br>
                <input type="submit" name="sub" class="btn btn-primary">
              </form>
              </div>

            </div>
          </div>
<?php } else { include '404.html'; } ?>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      
      <!-- End of Footer -->

    </div>
    <?php include 'partials/footer.php'; ?>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'partials/js.php'; ?>

<script>
  initSample();
</script>
</body>

</html>
